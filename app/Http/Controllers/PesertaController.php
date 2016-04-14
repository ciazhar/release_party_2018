<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jobs\SendThanksEmail;
use App\Peserta;
use Mail;
use Log;
use Input;
use Session;
//use Request;
// use QrCode;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = Peserta::all();
        return view('peserta.all')->withPesertas($pesertas);
    }
    public function report()
    {
        $pesertas = Peserta::all();

        $jumlahpesertabayar=0;
        $jumlahpesertabelumbayar=0;

        foreach($pesertas as $peserta){

            if($peserta->status_bayar == 1){    

                $jumlahpesertabayar++;
            }else{
                $jumlahpesertabelumbayar++;
            }

        }
            
        $totalharga = $jumlahpesertabayar * 50000;

        return view('peserta.report')->withPesertas($pesertas)
                                     ->withJumlahpesertabayar($jumlahpesertabayar)
                                     ->withJumlahpesertabelumbayar($jumlahpesertabelumbayar)
                                     ->withTotalharga($totalharga);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // acak kode tiket, 5 kali repeat, di ambil 3 karakter dari index 0 sampai 3
      $kode_tiket = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);

      // kunci rahasia
      $kunci_rahasia = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);
      // cek apakah kode_tiket sudah pernah dipakai ?
      if(Peserta::where('kode_tiket', '=', $kode_tiket)->exists())
      {
        // jika pernah, maka acak lagi, sebenernya sih baiknya pake While, tapi aku rasa ini cukup untuk mengatisipasi sampai 1000 peserta
        $kode_tiket = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);
      }

      $peserta = new Peserta();

      $peserta->kode_tiket = $kode_tiket ;
      $peserta->kunci_rahasia = $kunci_rahasia;
      $peserta->nama = $request->get('nama');
      $peserta->email = $request->get('email');
      $peserta->no_hp = $request->get('no_hp');
      $peserta->dvd = $request->get('dvd');
      $peserta->status = $request->get('status_peserta');

      $peserta->instansi = $request->get('instansi');

      $peserta->status_bayar = 0;
      $peserta->email_terkirim = 0;
      $peserta->sms_terkirim = 0;

      $data = $peserta->toArray();

      $peserta->save();

      Log::info('akan kirim email ke ' . $peserta->email);
      //$this->dispatch(new SendThanksEmail($data));

      Mail::queue('emails.after-register', $data, function($message) use ($data){
         $message->to($data['email'])
                 ->subject('Pendaftaran Release Party TeaLinux OS 8 - ' . $data['nama']);
                 Log::info('email terkirim ke ' . $data['email'] . ' dengan nama peserta : ' . $data['nama']);
       });

       //QrCode::generate($kode_tiket, '../public/qrcode.svg');

      return view('terimakasih')->withNamapeserta($peserta->nama);
    }

    public function show_konfirmasi()
    {
      return view('peserta.konfirmasi');
    }

    public function konfirmasi(Request $request)
    {

      $kode_tiket = $request->kode_tiket;
      if (Peserta::where('kode_tiket', '=', $kode_tiket)->exists()) {
        // buar object pesertanya yang bakal di tambahin
        $peserta = Peserta::where('kode_tiket', '=', $kode_tiket)->firstOrFail();
          // acak kode tiket, 5 kali repeat, di ambil 3 karakter dari index 0 sampai 3
        $penamaan_gambar = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 3);

        $peserta->atas_nama_pengirim = $request->atas_nama;
        $imageName = $penamaan_gambar. '.' . $request->file('image')->getClientOriginalExtension();
        $peserta->upload_bukti = $imageName;

        $peserta->save();
        $request->file('image')->move(
            base_path() . '/public/images/uploads/', $imageName
        );

        return view('peserta.sesudah_konfirmasi');

      }


    }

    public function cek_kode(Request $request)
    {

      if (Peserta::where('kode_tiket', '=', $request['kode'])->exists()) {

        $peserta = Peserta::where('kode_tiket', '=', $request['kode'])->firstOrFail();
        $nama = $peserta->nama;

        $pesan = 'Kode cocok, benarkah nama anda adalah : ';

        return response()->json(['sukses' => 1, 'nama' => $nama, 'pesan' => $pesan]);
      }
      else
      {
          return response()->json(['sukses' => 0, 'pesan' => 'Maaf, kode salah. Silahkan coba kembali.']);
      }

      //$input = $request->data;

    }

    public function tiket()
    {
      return view('peserta.tiket');
    }
    public function get_tiket(Request $request)
    {
      $kode_tiket = $request->kode_tiket;
      if (Peserta::where('kode_tiket', '=', $kode_tiket)->exists()) {
        // buar object pesertanya yang bakal di tambahin
        $peserta = Peserta::where('kode_tiket', '=', $kode_tiket)->firstOrFail();
        if($peserta->status_bayar == 1){
          $kode_tiket_qr_code = $peserta->kode_tiket . $peserta->kunci_rahasia;
          //Session::flash('sukses','Kode cocok, cukup tunjukan QR-code ini untuk saat masuk acara nanti.'); //<--FLASH MESSAGE
          return view('peserta.tiket-cocok')->withKode_tiket_qr_code($kode_tiket_qr_code)->withStatus(1);

        } else {
          return view('peserta.tiket-cocok')->withKode_tiket_qr_code('belum-bayar')->withStatus(0);
        }

      } else {

        Session::flash('gagal','Gagal maning son.'); //<--FLASH MESSAGE
        return view('peserta.tiket');
      }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::find($id);
        return view('peserta.edit')->withPeserta($peserta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $peserta = Peserta::find($request->peserta_id);
        $peserta->nama = $request->input('nama');
        $peserta->email = $request->input('email');
        $peserta->no_hp = $request->input('no_hp');
        $peserta->dvd = $request->input('dvd');
        $peserta->status = $request->input('status');
        $peserta->status_bayar = $request->input('status_bayar');
        $peserta->email_terkirim = $request->input('email_terkirim');
        $peserta->sms_terkirim = $request->input('sms_terkirim');
        Session::flash('pesan', $peserta->nama . ' Berhasi update data'); //<--FLASH MESSAGE

        $peserta->save();
        return redirect('peserta/edit/'.$peserta->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = Peserta::find($id);

        Session::flash('pesan','Peserta ' . $peserta->nama . ' dengan email ' . $peserta->email . ' telah di hapus.'); //<--FLASH MESSAGE

            $peserta->delete();

            return redirect("peserta/all");


    }
}
