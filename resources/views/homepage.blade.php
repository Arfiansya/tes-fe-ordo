<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graha Wisata Kita</title>

    <!-- ===css=== -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- ====google-font=== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    
</head>
<body>

    <nav class="nav">

        <div class="nav-head">
                   
            <div class="nav-logo">
                <img src="{{ asset('assets/logo/logo-gwk.png') }}" alt="">
            </div>

            <div class="nav-menu">
                <ul>
                    <li><a href="{{ route('homepage') }}">Homepage</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                    <li><a href="#">Daftar Hotel</a></li>
                    <li><a href="#">Bantuan</a></li>
                </ul>   
                </div>

            </div>

        </div>

        <div class="nav-button">
            <img src="{{ asset('assets/logo/indonesia-nav.png') }}" alt="">
            <select>
                <option>Indonesia (ID)</option>
                <option>Indonesia (EN)</option>
            </select>
        </div>



    </nav>

    <section id="hero" class="s-hero">

        <div class="container">
            

            <div class="s-hero-img">
                <img src="{{ asset('assets/img/hero-img.png') }}" alt="graha-wisata">
            </div>

            <div class="s-hero-content-path ">
                <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                <h2>HOTEL OPERATOR</h2>
            </div>

            <div class="s-hero-content-tittle">
                <h1>Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda</h1>
                <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
            </div>


            <div class="s-hero-button">
            <button type="button" class="s-hero-button-primary">
                Konsultasikan Bisnis Saya
            </button>

            </div>
            
        
        </div>

        <div class="s-hero-scroll">
            <h4>Scroll</h4>
            <img src="{{ asset('assets\icon\arrow-down-scroll.svg') }}" alt="">
        </div>


    </section>

    <section id="workflow" class="s-workflow">

        <div class="container">

            <div class="s-workflow-head">

                <div class="s-workflow-head-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>our workflow</h2>
                </div>

                <div class="s-workflow-head-tittle">
                    <h1>Proses Kerja Kami dalam <br>Meningkatkan Kualitas Properti</h1>
                </div>

            </div>

            <div class="s-workflow-item-1">
                <div class="s-workflow-item-img-1">
                    <img src="{{ asset('assets\logo\tantangan-workflow.png') }}" alt="">
                </div>

                <div class="s-workflow-item-content-1">
                    <div class="s-workflow-item-content-tittle-1">
                        <h2>Tantangan</h2>
                    </div>

                    <div class="s-workflow-item-content-deskripsi-1">
                        <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                    </div>
                </div>
            </div>

            <div class="s-workflow-item-2">
                <div class="s-workflow-item-img-2">
                    <img src="{{ asset('assets\logo\rumusan-workflow.png') }}" alt="">
                </div>

                <div class="s-workflow-item-content-2">
                    <div class="s-workflow-item-content-tittle-2">
                        <h2>Rumusan</h2>
                    </div>

                    <div class="s-workflow-item-content-deskripsi-2">
                        <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
                    </div>
                </div>
            </div>

            <div class="s-workflow-item-3">
                <div class="s-workflow-item-img-3">
                    <img src="{{ asset('assets\logo\goals-workflow.png') }}" alt="">
                </div>

                <div class="s-workflow-item-content-3">
                    <div class="s-workflow-item-content-tittle-3">
                        <h2>Goals</h2>
                    </div>

                    <div class="s-workflow-item-content-deskripsi-3">
                        <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                    </div>
                </div>
            </div>

            <div class="s-workflow-item-4">
                <div class="s-workflow-item-img-4">
                    <img src="{{ asset('assets\logo\idea-workflow.png') }}" alt="">
                </div>

                <div class="s-workflow-item-content-4">
                    <div class="s-workflow-item-content-tittle-4">
                        <h2>Ideas</h2>
                    </div>

                    <div class="s-workflow-item-content-deskripsi-4">
                        <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <section id="services" class="s-services">

        <div class="container">

            <div class="s-services-head">

                <div class="s-services-head-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>OUR SERVICES</h2>
                </div>

                <div class="s-services-head-tittle">
                    <h1>Apa Saja yang Bisa Kami Bantu ?</h1>
                </div>

            </div>

            <div class="s-services-content">

                <div class="s-services-content-card">
                    <div class="s-services-content-card-marker">
                        <h2>01</h2>
                    </div>
                    <div class="s-services-content-card-img">
                        <img src="{{ asset('assets/icon/services-img-1.png') }}" alt="Revenue Management Icon">
                    </div>
                    <div class="s-services-content-card-title">
                        <h1>Revenue Management Service</h1>
                    </div>

                    <button class="s-services-content-card-button" type="submit">Saya Tertarik <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt=""></button>
                </div>

                <div class="s-services-content-card">
                    <div class="s-services-content-card-marker">
                        <h2>02</h2>
                    </div>
                    <div class="s-services-content-card-img">
                        <img src="{{ asset('assets\icon\services-img-2.png') }}" alt="">
                    </div>
                    <div class="s-services-content-card-title">
                        <h1>Full Manage <br>Service</h1>
                    </div>

                    <button class="s-services-content-card-button" type="submit">Saya Tertarik <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt=""></button>
                </div>

                <div class="s-services-content-card">
                    <div class="s-services-content-card-marker">
                        <h2>03</h2>
                    </div>
                    <div class="s-services-content-card-img">
                        <img src="{{ asset('assets\icon\services-img-3.png') }}" alt="">
                    </div>
                    <div class="s-services-content-card-title">
                        <h1>Asset Monetize Service</h1>
                    </div>

                    <button class="s-services-content-card-button" type="submit">Saya Tertarik <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt=""></button>
                </div>


            </div>

        </div>

    </section>


    <section id="project" class="s-project">
        <div class="container">

            <div class="s-project-head">
                <div class="s-project-head-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                        <h2>our latest Projects</h2>
                        <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                </div>
                <div class="s-project-head-tittle">
                    <h1>PROJECT TERBARU KAMI</h1>
                </div>
            </div>

            <div class="swiper mySwiper" class="content-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="s-project-content">
                            <div class="s-project-content-background">
                                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
                            </div>
                            <div class="s-project-content-deskripsi">
                                <h6>1/4 OPERATIONAL PROJECT</h6>
                                <h1>Townhouse Oak</h1>
                                <p>Brand tertinggi di OYO</p>
                            </div>
                            <div class="s-project-content-detail">
                                <button class="s-project-content-detail-button">
                                    <img src="{{ asset('assets/icon/arrow-left.png') }}" alt="">
                                </button>
                                <h5>Lihat Detail</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="s-project-content">
                            <div class="s-project-content-background">
                                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
                            </div>
                            <div class="s-project-content-deskripsi">
                                <h6>1/4 OPERATIONAL PROJECT</h6>
                                <h1>Townhouse Oak</h1>
                                <p>Brand tertinggi di OYO</p>
                            </div>
                            <div class="s-project-content-detail">
                                <button class="s-project-content-detail-button">
                                    <img src="{{ asset('assets/icon/arrow-left.png') }}" alt="">
                                </button>
                                <h5>Lihat Detail</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="s-project-content">
                            <div class="s-project-content-background">
                                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
                            </div>
                            <div class="s-project-content-deskripsi">
                                <h6>1/4 OPERATIONAL PROJECT</h6>
                                <h1>Townhouse Oak</h1>
                                <p>Brand tertinggi di OYO</p>
                            </div>
                            <div class="s-project-content-detail">
                                <button class="s-project-content-detail-button">
                                    <img src="{{ asset('assets/icon/arrow-left.png') }}" alt="">
                                </button>
                                <h5>Lihat Detail</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-next">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 39.84L31.04 26.8C32.58 25.26 32.58 22.74 31.04 21.2L18 8.16" stroke="#333333" stroke-width="5.33333" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 39.84L31.04 26.8C32.58 25.26 32.58 22.74 31.04 21.2L18 8.16" stroke="#333333" stroke-width="5.33333" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

        </div>
    </section>


    <section id="testimonial" class="s-testimonial">
        
        <div class="container">
            
            <div class="s-testimonial-head">

                <div class="s-testimonial-head-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>our testimonial</h2>
                </div>

                <div class="s-testimonial-head-tittle">
                    <h1>Yang Klien Kami Katakan</h1>
                </div>
            </div>


            <div class="s-testimonial-img">
                <img src="{{ asset('assets/img/testimoni-img.png') }}" alt="klien">
            </div>

            <div class="s-testimonial-quote">
                <img src="{{ asset('assets/icon/testimoni-quote.png') }}" alt="">
                <p>GWA Group membantu hotel <br> saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
            </div>

            <div class="s-testimonial-name">
                <img src="{{ asset('assets\icon\ceo.png') }}" alt="">

                <div class="s-testimonial-name-idendtity">
                    <h4>CHAIM DESMOND</h4>
                    <h5>CEO of Yellow Hotel</h5>
                </div>
            </div>

        </div>

    </section>

    <section id="kontak" class="s-kontak">

        <div class="container">

            <div class="s-kontak-head">

                <div class="s-kontak-head-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>HUBUNGI KAMI</h2>
                </div>

                <div class="s-kontak-head-tittle">
                    <h1>Ingin Mendiskusikan Bisnis Pariwisata Anda ?</h1>
                </div>

                <hr class="s-kontak-hr">

                <div class="s-kontak-head-deskripsi">
                    <p>Ada kepentingan bisnismu yang ingin <br>didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !</p>
                </div>



            </div>

            <div class="s-kontak-form">

                <form>
                    <label class="form-label-nama" for="nama-lengkap">Nama Lengkap</label>
                    <input class="form-input-nama" type="text" id="nama-lengkap" placeholder="Masukkan Nama Lengkap">
                        
                    <label class="form-label-perusahaan" for="nama-perusahaan">Nama Perusahaan</label>
                    <input class="form-input-perusahaan" type="text" id="nama-perusahaan" placeholder="Masukkan Nama Perusahaan">
                        
                    <label class="form-label-nomor" class="form-label-nomor" for="nomor-whatsapp">Nomor Whatsapp Aktif</label>
                    <input class="form-input-nomor" type="text" id="nomor-whatsapp" placeholder="Masukkan Nomor Whatsapp">
                        
                    <button type="submit">Jadwalkan Konsultasi <img src="{{ asset('assets/icon/arrow-right.svg') }}" alt=""></button>
                </form>

            </div>

        </div>

    </section>

    <footer id="footer" class="s-footer">
        <div class="container">

            <div class="s-footer-logo">
                <img src="{{ asset('assets/logo/logo-gwk.png') }}" alt="Graha Wisata Kita">
            </div>

            <div class="footer-sections">
                <div class="section">
                    <h4>Halaman Utama</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                    </ul>
                </div>
                <div class="section">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Daftar Hotel</a></li>
                    </ul>
                </div>
                <div class="section">
                    <h4>Temukan Kami</h4>
                    <ul>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="section">
                    <h4>Social Media</h4>
                    <div class="social-media">
                        <img src="{{ asset('assets/icon/facebook.png') }}" alt="">
                        <img src="{{ asset('assets/icon/youtube.png') }}" alt="">
                        <img src="{{ asset('assets/icon/facebook.png') }}" alt="">
                    </div>
                </div>
            </div>


            <hr>

            <div class="s-footer-bottom">

                <div class="s-footer-bottom-inform">
                        <ul>
                            <li class="inform-up" ><a href="#">Pemberitahuan Privasi</a></li>
                            <li class="inform-down"><a href="#">Syarat dan Ketentuan</a></li>
                        </ul>
                </div>

                <div class="s-footer-bottom-language-selector">
                    <img src="{{ asset('assets/icon/translate.png') }}" alt="">


                    <div class="s-footer-bottom-language-selector-select">
                        <select>
                            <option>Bahasa Indonesia</option>
                            <option>Bahasa Inggris</option>
                        </select>
                    </div>
   
                    
                </div>

            </div>

            <div class="s-footer-copy">
                <a href="#">© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </a>
            </div>
            

        </div>
    </footer>

      <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>


    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
    
    document.addEventListener('DOMContentLoaded', function() {
      var navbar = document.querySelector('.nav');

      window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    });
  </script>

        <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>