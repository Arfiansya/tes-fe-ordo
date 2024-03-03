<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graha Wisata Kita</title>
    <link rel="stylesheet" href="/css/tentang.css">
    
</head>
<body>
    <!--=== navbar ===-->
    <nav id="tentang">
        <div class="wrap">
            <div class="logo"><img src="{{ asset('assets/logo/logo-gwk.png') }}" alt=""></div>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('homepage') }}">Homepage</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                    <li><a href="#">Daftar Hotel</a></li>
                    <li><a href="#">Bantuan</a></li>
                </ul>   
            </div>
            
            <div class="bt-lg">
                <a href="#">Indonesia ( ID )</a>
                <img src="{{ asset('assets/logo/indonesia-nav.png') }}" alt="">
            </div>
        </div>
    </nav>

    <!--=== Hero section ===-->
    <section id="hero-section">
        <div class="container">
            <img class="hero-img" src="{{ asset('assets/img/hero-img-2.png') }}" alt="">
            
            <div class="des-hero">
                <h1>Kenalan Lebih Dekat dengan Graha Wisata Kita dan Sejarahnya</h1>
            </div>

            <div class="kolom-1">
                <h2>Visi Kami</h2>

                <p>Visi kami adalah memberikan layanan terbaik bagi para mitra serta meningkatkan nilai standar dalam industri hospitality khususnya pada segmentasi low budget hotel.</p>
            </div>
            <div class="kolom-2">
                <h2>Misi Kami</h2>

                <p>Sesuai dengan visi kami GWA akan terus memberikan layanan yang terintegrasi, transparan, serta independen dalam pelayanan kami kepada para mitra</p>
            </div>
        </div>

        <div class="penjelasan">
            <div class="container">
                <p>PT Graha Wisata Kita didirikan pada Oktober 2021. Didasari dari pesatnya industri perhotelan di Indonesia serta impact besar dari pandemi Covid-19 di dunia menjadikan semangat GWA untuk membangkitkan gairah industri perhotelan khususnya melalui jejaring kerjasama dengan OYO Indonesia selaku mitra strategis.</p>
            </div>
            <img src="{{ asset('assets/img/garis-01.png') }}" alt="">
        </div>

    </section>

    <section id="penjelasan-section">
        <div class="penjelasan">
            <div class="container">
                <p>PT Graha Wisata Kita didirikan pada Oktober 2021. Didasari dari pesatnya industri perhotelan di Indonesia serta impact besar dari pandemi Covid-19 di dunia menjadikan semangat GWA untuk membangkitkan gairah industri perhotelan khususnya melalui jejaring kerjasama dengan OYO Indonesia selaku mitra strategis.</p>
            </div>
            <img src="{{ asset('assets/img/garis-01.png') }}" alt="">
        </div>
    </section>
    <!--=== goal section ===-->

    <section id="goal-section">
        <div class="goal-op">
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="" class="left-img">
            <h2>OUR Goal</h2>
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="" class="right-img">
        </div>

        <div class="goal-deskripsi">
            <h1>Tujuan Yang Berusaha Kami Capai</h1>
        </div>

        <div class="goal-1">
            <div class="container">
                <img src="{{ asset('assets/logo/goal-1.png') }}" alt="">
            </div>
            <h2>Peningkatan SDM</h2>
            <p>SDM itu hal utama pada semua bisnis, karenanya kami memastikan peningkatan kinerja SDM Mitra dengan SDM terpilih dari kami</p>
        </div>

        <div class="goal-2">
            <div class="container">
                <img src="{{ asset('assets/logo/goal-2.png') }}" alt="">
            </div>
            <h2>Peningkatan Kualitas</h2>
            <p>Dengan peningkatan kualitas SDM yang dimiliki mitra tentunya kualitas layanan akan menjadi lebih baik dan terstruktur.</p>
        </div>

        <div class="goal-3">
            <div class="container">
                <img src="{{ asset('assets/logo/goal-3.png') }}" alt="">
            </div>
            <h2>Peningkatan Revenue</h2>
            <p>Yang pada akhirnya memberikan nilai positif pada pendapatan mitra melalui fase-fase peningkatan yang telah dijalankan</p>
        </div>

    </section>

    <!--=== services-section ===-->

    <section id="milestone-section">
        <div class="mile-op">
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="" class="left-img">
            <h2>OUR Milestone</h2>
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="" class="right-img">
        </div>

        <div class="mile-deskripsi">
            <h1>Milestone & Timeline</h1>
        </div>

        <div class="container-content">
            <div class="scroll">
                <div class="panjang"></div>
                <div class="pendek"></div>
            </div>

            <div class="content-1">
                <h3>2010</h3>
                <img src="{{ asset('assets/img/mile-1.png') }}" alt="">
                <p>20 ojek, 1 call center, dan 1 misi untuk menyelesaikan masalah masyarakat Indonesia. Gojek membuat jalanan Jakarta menjadi sebuah lautan hijau.</p>
            </div>

            <div class="content-2">
                <h3>2010</h3>
                <img src="{{ asset('assets/img/mile-2.png') }}" alt="">
                <p>Aplikasi Gojek dibuat. Ada kenaikan pesanan dari 3,000 per hari jadi 10,000 per hari. Ekspansi ke luar kota. Lalu, kami melihat kesempatan untuk ekspansi ke ranah pesan antar makanan, penjualan tiket, dll.</p>
            </div>
        </div>

        <div class="bt-wrap">
            <button class="custom-button">Lihat Semua Milestone</button>
        </div>

    </section>

    <!--=== projects-section ===-->
    <section id="project-section">
        <div class="project-op">
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="" class="left-img">
            <h2>our latest Projects</h2>
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="" class="right-img">
        </div>
        
        <div class="project-deskripsi">
            <h1>Project Terbaru Kami</h1>
        </div>

        <div class="project-content">
            <div class="container">
                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
            </div>

            <div class="deskripsi-content">
                <h4>1/4 OPERATIONAL PROJECT</h4>
                <h5>Townhouse Oak</h5>
                <p>Brand tertinggi di OYO</p>
                <div class="lihat-detail">
                    <button>></button>
                    <h6>Lihat Detail</h6>
                </div>
            </div>

            <div class="button-img">
                <button class="button-kanan">></button>
                <button class="button-kiri"><</button>
            </div>
        </div>
    </section>

    <!--=== testimoni-section ===-->
    <section id="testimoni-section">
        <div class="testi-op">
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
            <h2>OUR TESTIMONIALS</h2>
        </div>

        <div class="testimoni-deskripsi">
            <h1>Yang Klien Kami Katakan</h1>
        </div>
        
        <div class="testi-img">
            <img src="{{ asset('assets/img/testimoni-img.png') }}" alt="">
        </div>

        <div class="testimoni-content">
            <div class="quote-content">
                <img src="{{ asset('assets/icon/testimoni-quote.png') }}" alt="">
                <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
            </div>
        </div>

        <div class="clien-profile">
            <img src="{{ asset('assets/icon/clien-content.png') }}" alt="">
            <h3>Chaim Desmond</h3>
            <p>CEO of Yellow Hotel</p>
        </div>
    </section>

    <!--=== hubungi-kami-section ===-->
    <section id="hubkam-section">
        <div class="des-hub">
            <div class="hubkam-op">
                <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                <h2>HUBUNGI KAMI</h2>
            </div>

            <div class="deskripsi-hubkam">
                <h1 class="h1-mb">Ingin Mendiskusikan Bisnis Pariwisata Anda ?</h1>
                <p>Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !</p>
            </div>
        </div>

        <div class="kolom-konsultasi">
            <div class="container">
                <form action="some_action" method="post" id="konsultasi-form">
                    <div class="form">
                        <label for="fullname">Nama Lengkap</label><br>
                        <input type="text" id="fullname" name="fullname"><br>
                    </div>
                    <div class="form">
                        <label for="companyname">Nama Perusahaan</label><br>
                        <input type="text" id="companyname" name="companyname"><br>
                    </div>
                    <div class="form">
                        <label for="whatsappnumber">Nomor Whatsapp Aktif</label><br>
                        <input type="tel" id="whatsappnumber" name="whatsappnumber"><br>
                    </div>
                    <div class="form-aksi">
                        <input type="submit" value="Jadwalkan Konsultasi">
                    </div>
                </form>
            </div>
	    </div>
    </section>

    <!--=== footer omagaaaaaa ===-->
    <footer id="footer">
        <div class="atas">

            <div class="logo">
                <img class="img-logo" src="{{ asset('assets/logo/logo-gwk.png') }}" alt="">
            </div>

            <div class="navbar-mungkin">
                <h6>Halaman Utama</h6>
                <p>Homepage</p>
            </div>

            <div class="perusahaan-mungkin">
                <h6>Perusahaan</h6>
                <div class="p1"><p>Tentang Kami</p></div>
                <div class="p2"><p>Daftar Hotel</p></div>
            </div>

            <div class="temukan-mungkin">
                <h6>Temukan Kami</h6>
                <div class="p1"><p>Bantuan</p></div>
                <div class="p2"><p>Hubungi Kami</p></div>
            </div>

            <div class="sosmed-mungkin">
                <h6>Social Media</h6>
                <div class="img-1"><img src="{{ asset('assets/icon/facebook.png') }}" alt=""></div>
                <div class="img-2"><img src="{{ asset('assets/icon/youtube.png') }}" alt=""></div>
                <div class="img-3"><img src="{{ asset('assets/icon/instagram.png') }}" alt=""></div>
            </div>
        </div>

        <div class="border-doang"></div>

        <div class="bawah">
            <div class="garis-bawah">
                <a href="#" class="p1"><p>Pemberitahuan Privasi</p></a>
                <a href="#" class="p2"><p>Syarat Dan Ketentuan</p></a>
            </div>

            <div class="bahasa">
                <img src="{{ asset('assets/icon/translate.png') }}" alt="">

                <div class="container">
                    <p>Bahasa Indonesia</p>
                </div>
            </div>
        </div>

        <div class="kopi-kanan">
                <p>© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </p>
            </div>
    </footer>
</body>
</html>