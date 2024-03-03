<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graha Wisata Kita</title>
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>
    <!--=== navbar ===-->
    <nav>
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
        <div class="container-hero">
            <img class="hero-img" src="{{ asset('assets/img/hero-img.png') }}" alt="">
            <div class="kolom-deskripsi">
                <div class="hotel-op">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>HOTEL OPERATOR</h2>
                </div>
                <div class="deskripsi-hotel">
                    <h1>Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
                    <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
                </div>
                <div class="bt-wrap">
                    <button class="custom-button">Konsultasikan Bisnis Saya</button>
                </div>
        </div>
        </div>
    </section>

    <!--=== workflow-section ===-->
    <section id="workflow-section">
        <div class="work-op">
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
            <h2>OUR WORKFLOW</h2>
        </div>

        <div class="deskripsi-workflow">
            <h1>Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h1>
        </div>

        <div class="workflow-1">
            <img src="{{ asset('assets/logo/tantangan-workflow.png') }}" alt="">
            <h2>Tantangan</h2>
            <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
        </div>

        <div class="workflow-2">
            <img src="{{ asset('assets/logo/rumusan-workflow.png') }}" alt="">
            <h2>Rumusan</h2>
            <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
        </div>

        <div class="workflow-3">
            <img src="{{ asset('assets/logo/goals-workflow.png') }}" alt="">
            <h2>Goals</h2>
            <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
        </div>

        <div class="workflow-4">
            <img src="{{ asset('assets/logo/idea-workflow.png') }}" alt="">
            <h2>Ideas</h2>
            <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
        </div>
    </section>

    <!--=== services-section ===-->
    <section id="services-section">
        <div class="services-op">
            <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
            <h2>OUR SERVICES</h2>
        </div>

        <div class="deskripsi-services">
            <h1>Apa Saja yang Bisa Kami Bantu ?</h1>
        </div>

        <div class="services-1">
            <img src="{{ asset('assets/icon/services-img-1.png') }}" alt="">
            <h2>Revenue Management Service</h2>
            <div class="ser-wrap-1">
                <button class="custom-button">saya tertarik</button>
            </div>
            <h3>01</h3>
        </div>

        <div class="services-2">
            <img src="{{ asset('assets/icon/services-img-2.png') }}" alt="">
            <h2>Full Manage Service</h2>
            <div class="ser-wrap-2">
                <button class="custom-button">saya tertarik</button>
            </div>
            <h3>02</h3>
        </div>

        <div class="services-3">
            <img src="{{ asset('assets/icon/services-img-3.png') }}" alt="">
            <h2>Asset Monetize Service</h2>
            <div class="ser-wrap-3">
                <button class="custom-button">saya tertarik</button>
            </div>
            <h3>03</h3>
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