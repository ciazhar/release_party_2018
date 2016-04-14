@extends('app')

@section('content')

    <header id="top" class="header">
        <div class="container">
            <div class="header_top-bg">
                <div class="logo">
                    <a href="#"><img src="{{asset ('images/logo-cerah.png')}}" alt="event-logo">
                    </a>
                </div>
            </div>
            <h3 class="headline-support wow fadeInDown">Seminar Nasional dan Release Party TeaLinux OS 8</h3>
            <h1 class="headline wow fadeInDown" data-wow-delay="0.1s">Open Source Everywhere </h1>
            <div class="when_where wow fadeIn" data-wow-delay="0.4s">
                <p class="event_when">28 Mei 2016</p>
                <p class="event_where"><b>Semarang</b>, Indonesia</p>
            </div>
            <div class="header_bottom-bg">
                <a class="btn btn-default btn-xl wow zoomIn" data-wow-delay="0.3s" href="#daftar">DAFTAR SEKARANG</a>
                <p class="cta_urgency wow fadeIn" data-wow-delay="0.5s"><small>Cepat, kursi terbatas</small>
                </p>
            </div>
        </div>

    </header>


    <section class="highlight">
        <div class="container">
            <p class="lead text-center">Sebuah kegiatan peluncuran yang diadakan oleh Doscom (Dinus Open Source Community) untuk merayakan peluncuran TeaLinuxOS versi 8. Release Party telah menjadi suatu tradisi tahunan doscom untuk menarik pengguna baru atau masyarakat yang potensial guna meningkatkan publikasi TeaLinuxOS. </p>
            <div class="countdown_wrap">
                <h6 class="countdown_title text-center">Acara akan berlangsung pada</h6>

                <ul id="countdown" data-event-date="28 may 2016 08:00:00">
                    <li class="wow zoomIn" data-wow-delay="0s"> <span class="days">00</span>
                        <p class="timeRefDays">Hari</p>
                    </li>
                    <li class="wow zoomIn" data-wow-delay="0.2s"> <span class="hours">00</span>
                        <p class="timeRefHours">Jam</p>
                    </li>
                    <li class="wow zoomIn" data-wow-delay="0.4s"> <span class="minutes">00</span>
                        <p class="timeRefMinutes">Tanggal</p>
                    </li>
                    <li class="wow zoomIn" data-wow-delay="0.6s"> <span class="seconds">00</span>
                        <p class="timeRefSeconds">Detik</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="speakers" id="pembicara">
        <div class="container">
            <div class="section-title wow fadeInUp">
                <h4>Pembicara</h4>
            </div>
            <div class="speaker-slider">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="speaker-info wow fadeIn" data-wow-delay="0s">
                            <img src="{{asset ('images/pakanjar.png')}}" alt="avatar" class="img-responsive center-block">
                            <p>Anjar Hardiena</p>
                            <span><b>CEO</b> CloudKilat.com</span>
                            <br/>
                            <br/>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pembicara1">Lihat Profil</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="speaker-info wow fadeIn" data-wow-delay="0.1s">
                            <img src="{{asset ('images/masas.png')}}" alt="avatar" class="img-responsive center-block">
                            <p>Masas Dani</p>
                            <span><b>CTO </b> Gnews.id</span>
                            <br>
                            <br/>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pembicara2">Lihat Profil</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="speaker-info wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset ('images/pakshokibi.png')}}" alt="avatar" class="img-responsive center-block">
                            <p>Shokibi</p>
                            <span><b>Penulis</b> Buku Open Source</span>
                            <br/>
                            <br/>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pembicara3">Lihat Profil</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="speaker-info wow fadeIn" data-wow-delay="0.2s">
                            <img src="{{asset ('images/doscom.png')}}" alt="avatar" class="img-responsive center-block">
                            <p>Team Doscom</p>
                            <span><b>Developer</b> TeaLinuxOS</span>
                            <br/>
                            <br/>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#pembicara4">Lihat Detail</button>
                        </div>

                    </div>
                </div>
            </div>

    </section>


    <section class="schedule" id="agenda">
        <div class="container">
            <div class="section-title wow fadeInUp">
                <h4>Agenda</h4>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="day1">

                    <section class="timeline">
                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Registrasi Ulang</h2>
                                <span class="date wow flipInX" data-wow-delay="0.3s">7:30</span>
                            </div>

                        </div>

                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Materi Open Source di bidang Cloud Computing</h2>
                                <p class="wow flipInX" data-wow-delay="0.3s">oleh Anjar Hardiena</p>
                                <span class="date wow flipInX" data-wow-delay="0.3s">08:30</span>
                            </div>

                        </div>

                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Materi Open Source Di Bidang Multimedia dan Design</h2>
                                <p class="wow flipInX" data-wow-delay="0.3s">oleh Sokhibi</p>
                                <span class="date wow flipInX" data-wow-delay="0.3s">09:15 </span>
                            </div>

                        </div>

                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Materi Open Source Di Bidang Programming </h2>
                                <p class="wow flipInX" data-wow-delay="0.3s">oleh Masas Dani</p>
                                <span class="date wow flipInX" data-wow-delay="0.3s">10:00</span>
                            </div>

                        </div>

                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Talk Show 3 Pembicara</h2>
                                <span class="date wow flipInX" data-wow-delay="0.3s">10:45</span>
                            </div>

                        </div>

                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Tea Break + Hiburan</h2>
                                <span class="date wow flipInX" data-wow-delay="0.3s">11:30 </span>
                            </div>

                        </div>

                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s">Release Party Tea LInux OS ke-8</h2>
                                <span class="date wow flipInX" data-wow-delay="0.3s">12:00</span>
                            </div>

                        </div>
                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s"> Try Tea Linux OS 8</h2>
                                <span class="date wow flipInX" data-wow-delay="0.3s">13:00 </span>
                            </div>

                        </div>
                        <div class="timeline-block">
                            <div class="timeline-bullet wow zoomIn" data-wow-delay="0s">
                            </div>

                            <div class="timeline-content">
                                <h2 class="wow flipInX" data-wow-delay="0.3s">Penutup, pembagian Door Prize</h2>
                                <span class="date wow flipInX" data-wow-delay="0.3s">13:15</span>
                            </div>

                        </div>
                    </section>


                </div>


            </div>
        </div>

    </section>




    <section class="gallery" id="galeri">
        <div class="container">
            <div class="section-title">
                <h4>GALERI</h4>
                <p>Dokumentasi release party Tealinux OS versi 7 (tahun lalu)</p>

            </div>
            <div class="nav-center bottom-space-lg">

                <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active"><a href="#photo-gallery" aria-controls="photo-gallery" role="tab" data-toggle="tab">Foto</a>
                    </li>
                    <li role="presentation"><a href="#video-gallery" aria-controls="video-gallery" role="tab" data-toggle="tab">Video</a>
                    </li>

                </ul>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="photo-gallery">
                    <div class="popup-gallery">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{asset ('images/dokumentasi-release-party-tealinuxos-7-2.jpg')}}" title=""><img src="{{asset ('images/dokumentasi-release-party-tealinuxos-7-2.jpg')}}" alt="gallery image" class="img-responsive wow fadeIn">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{asset ('images/dokumentasi-release-party-tealinuxos-7.jpg')}}" title=""><img src="{{asset ('images/dokumentasi-release-party-tealinuxos-7.jpg')}}" alt="gallery image" class="img-responsive wow fadeIn" data-wow-delay="0.2s">
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{asset('images/dokumentasi-release-party-tealinuxos-7-3.jpg')}}" title=""><img src="{{asset('images/dokumentasi-release-party-tealinuxos-7-3.jpg')}}" alt="gallery image" class="img-responsive wow fadeIn" data-wow-delay="0.2s">
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{asset('images/dokumentasi-release-party-tealinuxos-7-4.jpg')}}" title=""><img src="{{asset ('images/dokumentasi-release-party-tealinuxos-7-4.jpg')}}" alt="gallery image" class="img-responsive wow fadeIn" data-wow-delay="0.4s">
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="{{asset ('images/panitia-release-party-tealinuxos.jpg')}}" title=""><img src="{{asset ('images/panitia-release-party-tealinuxos.jpg')}}" alt="gallery image" class="img-responsive wow fadeIn" data-wow-delay="0.4s">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="video-gallery">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center media-video">
                            <div class="video-wrapper">
                                <iframe width="640" height="360" src="https://www.youtube.com/embed/kRYLujNkpec" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>


    <section class="highlight accommodation" id="detail">
        <div class="container">
            <div class="section-title wow fadeInUp">
                <h4>Detail Acara  </h4>

            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail wow fadeInUp">
                        <img src="{{asset('images/lokasi.png')}}" alt="Lokasi Acara" style="margin: 30px auto;">
                        <div class="caption">
                            <p class="caption-text">LOKASI</p>
                            <h6 class="caption-title">Aula Gedung E Lantai 3<br> Universitas Dian Nuswantoro</h6>
                            <p class="text-center"><a target="_blank" href="https://www.google.co.id/maps/place/Televisi+Kampus+Universitas+Dian+Nuswantoro+(TVKU)/@-6.9811275,110.4059704,17z/data=!4m5!1m2!2m1!1sTVKU!3m1!1s0x2e708b4eab7880ab:0x40622c0d71e2ddb5?hl=id" class="btn btn-outline" role="button">Buka Google Maps</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{asset('images/fasilitas.png')}}" alt="Fasilitas" style="margin: 30px auto;">
                        <div class="caption">
                            <p class="caption-text">FASILITAS</p>
                            <h6 class="caption-title" style="text-align: left; ">
                                <ul>
                                    <li>Sertifikat</li>
                                    <li>DVD Exclusive TeaLinux OS 8</li>
                                    <li>Snack + Tea Break</li>
                                    <li>Ilmu + Pengalaman</li>
                                    <li>Doorprize <br>berupa Smart Watch</li>
                                </ul>

                            </h6>
                            * bagi peserta yang beruntung

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
                    <div class="thumbnail wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{asset ('images/tiket.png')}}" alt="The Gleneagles Hotel" style="margin: 30px auto;">
                        <div class="caption">
                            <p class="caption-text">HTM</p>
                            <h6 class="caption-title">Rp. 45.000,-</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="container" id="daftar">
        <div class="section-title">
            <h5>DAFTAR SEKARANG</h5>
            <p>Jadi saksi perayaan di rilisnya TeaLinuxOS versi baru - 8.</p>
        </div>
        <div class="contact-form bottom-space-xl wow fadeInUp">
            <form action="{{asset ('php/contact.php')}}" id="phpcontactform" method="POST">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda ( karena akan kami cetak di sertifikat )" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="text" class="form-control" name="phone" placeholder="Nomor HP yang dapat dihubungi" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
                        </div>

                        <div class="form-group has-info">
                            <label class="">Status</label>

                            <select id="opsi-status" class="form-control" name="status_peserta" required="required">
                                <option >-- Pilih --</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="pelajar">Pelajar</option>
                                <option value="umum">Umum</option>
                            </select>


                        </div>

                        <div class="form-group has-info">
                            <label class=""> DVD TeaLinux OS 8</label>

                            <select class="form-control" name="dvd" required="required">
                                <option >--Pilih--</option>
                                <option value="32">32 Bit</option>
                                <option value="64">64 Bit</option>

                            </select>

                        </div>

                        <div class="text-center top-space">
                            <button type="submit" class="btn btn-success btn-block btn-lg" id="js-contact-btn">Daftar</button>
                            <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="highlight" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-box">
                        <img src="images/lokasi.png" alt="location icon" class="wow zoomIn">
                        <h5>ALAMAT</h5>
                        <p>Gedung D Lantai 1
                            <br> (Dekat Kantik Udinus)
                            <br><b>Universitas Dian Nuswantoro</b>
                            <br>Jalan Nakula I No 1 - 15
                            <br><b>Semarang</b> 50131</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-box">
                        <img src="{{asset('images/kontak.png')}}" alt="email icon" class="wow zoomIn" data-wow-delay="0.3s">
                        <h5>KONTAK</h5>
                        <p>Salamuddin - <b>0896 7565 7864</b>
                            <br>Bona Deny - <b>0857 2910 0499</b>
                            <br>Priyo - <b>0857 2767 6696</b>
                            <br>Email : <a href="mailto:sekretariat@doscom.org?Subject=Release%20Party" target="_top">sekretariat@doscom.org</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <section class="sponsors">
        <div class="container">
            <div class="section-title wow fadeInUp">
                <h4>Sponsor Kami</h4>
                <p>Acara ini terselenggara berkat dukungan berbagai pihak, Terimakasih!</p>
            </div>
            <div class="sponsor-slider wow bounceIn">
                <div><img src="{{asset ('images/sponsor/udinus.png')}}" class="img-responsive center-block" alt="sponsor"> </div>
                <div><img src="{{asset ('images/sponsor/dinustek.png')}}" class="img-responsive center-block" alt="sponsor"> </div>
                <div><img src="{{asset ('images/sponsor/sosro.png')}}" class="img-responsive center-block" alt="sponsor"> </div>
                <div><img src="{{asset ('images/sponsor/qwords.png')}}" class="img-responsive center-block" alt="sponsor"> </div>
                <div><img src="{{asset ('images/sponsor/tvku.png')}}" class="img-responsive center-block" alt="sponsor"> </div>

            </div>
        </div>

    </section>



    <section class="faq" id="faq">
        <div class="container">
            <div class="section-title">
                <h5>Pertanyaan yang sering di tanyakan</h5>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s">
                    <h6 class="faq-title">Apa itu <i>open-soure</i> ?</h6>
                    <p>Open Source (sumber kode terbuka) , kode sumber yang dibagikan ke siapa aja secara gratis maupun berbayar, dengan open source pengembangan dari kode terbuka menjadi lebih luas dan ditangani oleh banyak orang dari mana aja, siapa saja, kapan saja, dengan kode terbuka kita bebas berkreasi sesuka hati tanpa terikat / bergantung dari suatu vendor tertentu. Simak berbagai alasan mengapa banyak perusahaan IT berskala besar akhirnya berlomba-lomba meng-open source-kan produk mereka ? cari tahu berbagai alasan di acara ini yang bertema "Open Source Everywhere".</p>
                    <h6 class="faq-title">Apa itu Tealinux OS ?</h6>
                    <p><a href="http://tealinuxos.org"> TeaLinuxOS </a>adalah distro Linux turunan Ubuntu yang dikembangkan oleh Dinus Open Source Community (DOSCOM) yang berorientasi pemrograman. Dengan menghadirkan filosofi, “Nikmatnya sebuah racikan”, TeaLinuxOS dikembangkan secara terbuka dan bersama-sama untuk menghasilkan distro Linux pemrograman yang dikhususkan untuk dunia pendidikan. </p>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-duration="2s">
                    <h6 class="faq-title">Siapa penyelenggara acara ini ?</h6>
                    <p>Acara ini di selenggarakan oleh<a href="http://doscom.org"> Doscom - Dinus Open Source Community</a> . Kami adalah komunitas open source di bidang perangkat lunak yang memilik visi untuk " Memasyarakatkan Open Source dan Meng-Open Source-kan Masyrakat " melalui berbagai kegitan seperti workshop, seminar dan sharing session, Kami juga meracik sebuah sistem operasi bernama TeaLinuxOS. </p>
                    <h6 class="faq-title">Bagaimana alur pendaftaran acara ini ?</h6>
                    <p>Pendaftaran acara ini dapat di lakukan melalui dua cara :
                    <ul>
                        <li>Datang langsung ke stand / camp kami di Gedung D Lantai 1 Universitas Dian Nuswantoro</li>
                        <li>Melakukan peftaran secara Online lalu melakukan pembayaran via rekening bank. (Nomer rekening dan prosedur lengkap kami kirim via email setelah Anda mendaftar)</li>
                        <ul>
                            <li>Lakukan pembayaran ke nomer rekening kami</li>
                            <li>Konfirmasi pembayaran mu ke <a href="#">halaman konfirmasi </a> / kirim sms dengan format "Nama Peserta Nama bank pengirim Atas nama pengirim" </li>
                            <li>Tunggu maximal 1 x 24 Jam, untuk kami akan melakukan pengecekan lalu kami menghubungimu ( :</li>
                        </ul>
                    </ul> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-action">
        <div class="container">
            <h4 class="headline-support wow fadeInDown">Ayo gabung dalam perayaan rilis produk anak bangsa</h4>
            <h2 class="headline wow fadeInDown" data-wow-delay="0.1s">TeaLinuxOS 8</h2>
            <div class="footer_bottom-bg">
                <a class="btn btn-success btn-xl wow zoomIn" data-wow-delay="0.3s" href="#daftar">DAFTAR SEKARANG</a>
            </div>
        </div>
    </section>


    <form class="form-horizontal" action="{{ url('terimakasih')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group has-info">
        <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Nama</label>
        <div class="col-md-9">
            <input  name="nama" class="form-control" placeholder="Nama" type="text" value="{{ old('nama') }}" required="required">
        </div>
    </div>

    <div class="form-group has-info">
        <label for="inputEmail" class="col-md-2 control-label"><i class=" glyphicon glyphicon-earphone"></i> No. Hp</label>
        <div class="col-md-9">
            <input class="form-control" name="no_hp" placeholder="No. Hp" type="text" value="{{ old('no_hp') }}" required="required">
        </div>
    </div>
    <div class="form-group has-info">
        <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
        <div class="col-md-9">
            <input  name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required="required">
        </div>
    </div>
    <div class="form-group has-info">
        <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Status</label>
        <div class="col-md-9">
            <select id="opsi-status" class="form-control" name="status_peserta" required="required">
                <option >-- Pilih --</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="pelajar">Pelajar</option>
                <option value="umum">Umum</option>
            </select>
        </div>

    </div>
    <div class="form-group has-info instansi">

    </div>

    <div class="form-group has-info">
        <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> DVD</label>
        <div class="col-md-9">
            <select class="form-control" name="dvd" required="required">
                <option >--Pilih--</option>
                <option value="32">32 Bit</option>
                <option value="64">64 Bit</option>

            </select>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-10 col-md-offset-5">
            <button type="submit" class="btn btn-raised btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
        </div>
    </div>
</form>

@endsection

@section('footer')
<script type="text/javascript">
  $('#opsi-status').change(function(){

    if( $(this).val() == 'mahasiswa'){
        var instansi = "Apa nama kampus mu ?";
    } else if($(this).val() == 'pelajar'){
      var instansi = "Apa nama sekolah mu ?";
    } else if($(this).val() == 'umum') {
      var instansi = "Apa nama instansi mu ?";
    } else {
      $('#instansi').remove();
    }


    $('#instansi').remove();
    $('.instansi').append('<div class="col-md-9 col-md-offset-2"><input id="instansi" class="form-control" name="instansi" type="text" placeholder=" ' + instansi + '"  /></div>');
  });
</script>
@endsection
