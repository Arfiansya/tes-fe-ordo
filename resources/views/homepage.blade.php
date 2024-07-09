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
        <div class="container">
            <div class="nav-head">
                <div class="nav-head-logo">
                    <img src="{{ asset('assets/logo/logo-gwk.png') }}" alt="">
                </div>
                <div class="nav-head-menu" id="nav-menu">
                    <ul>
                        <li><a href="{{ route('homepage') }}">Homepage</a></li>
                        <li><a href="{{ route('tentang') }}">Tentang</a></li>
                        <li><a href="#">Daftar Hotel</a></li>
                        <li><a href="#">Bantuan</a></li>
                    </ul>
                </div>

                <div class="dropdown nav-head-dropdown">
                    <button class="btn btn-secondary dropdown-toggle nav-head-dropdown-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/logo/indonesia-nav.png" alt="Flag of Indonesia" width="20" height="20">
                        Indonesia (ID)
                    </button>
                    <ul class="dropdown-menu nav-head-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><img src="assets/logo/indonesia-nav.png" alt="Indonesia" width="20" height="20"> Indonesia</a></li>
                        <li><a class="dropdown-item" href="#"><img src="assets/logo/uk-nav.png" alt="English" width="20" height="20"> English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero" class="s-hero">

        <div class="container">
            

            <div class="s-hero-img">
                <img src="{{ asset('assets/img/hero-img.png') }}" alt="graha-wisata">
            </div>

            <div class="s-hero-inner">
                <div class="s-hero-content-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>HOTEL OPERATOR</h2>
                </div>

                <div class="s-hero-content-tittle">
                    <h1>Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda</h1>
                </div>

                <div class="s-hero-content-teks">
                    <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
                </div>


                <div class="s-hero-button">
                <button type="button" class="s-hero-button-primary">
                    Konsultasikan Bisnis Saya
                </button>
                </div>
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
        </div>
        

        
        <div class="container">
            <div class="s-workflow-card">
                    
                    <div class="s-workflow-card-item s-workflow-card-item-1">
                        <div class="s-workflow-card-item-img">
                            <img src="{{ asset('assets\logo\tantangan-workflow.png') }}" alt="">
                        </div>

                        <div class="s-workflow-card-item-content s-workflow-card-item-content-1">
                            <div class="s-workflow-card-item-content-tittle s-workflow-card-item-content-tittle-1">
                                <h2>Tantangan</h2>
                            </div>

                            <div class="s-workflow-card-item-content-deskripsi s-workflow-card-item-content-deskripsi-1">
                                <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                            </div>
                        </div>
                    </div>

                    <div class="s-workflow-card-item s-workflow-card-item-2">
                        <div class="s-workflow-card-item-img">
                            <img src="{{ asset('assets\logo\rumusan-workflow.png') }}" alt="">
                        </div>

                        <div class="s-workflow-card-item-content s-workflow-card-item-content-2">
                            <div class="s-workflow-card-item-content-tittle s-workflow-card-item-content-tittle-2">
                                <h2>Rumusan</h2>
                            </div>

                            <div class="s-workflow-card-item-content-deskripsi s-workflow-card-item-content-deskripsi-2">
                                <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
                            </div>
                        </div>

                        
                    </div>

                    <div class="s-workflow-card-item s-workflow-card-item-3">
                        <div class="s-workflow-card-item-img">
                            <img src="{{ asset('assets\logo\goals-workflow.png') }}" alt="">
                        </div>

                        <div class="s-workflow-card-item-content s-workflow-card-item-content-3">
                            <div class="s-workflow-card-item-content-tittle s-workflow-card-item-content-tittle-3">
                                <h2>Goals</h2>
                            </div>

                            <div class="s-workflow-card-item-content-deskripsi s-workflow-card-item-content-deskripsi-3">
                                <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                            </div>
                        </div>
                    </div>

                    <div class="s-workflow-card-item s-workflow-card-item-4">
                        <div class="s-workflow-card-item-img">
                            <img src="{{ asset('assets\logo\idea-workflow.png') }}" alt="">
                        </div>

                        <div class="s-workflow-card-item-content s-workflow-card-item-content-4">
                            <div class="s-workflow-card-item-content-tittle s-workflow-card-item-content-tittle-4">
                                <h2>Ideas</h2>
                            </div>

                            <div class="s-workflow-card-item-content-deskripsi s-workflow-card-item-content-deskripsi-4">
                                <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                            </div>
                        </div>
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
                        <h1>Revenue <br>Management Service</h1>
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

            <div class="swiper mySwiper project-swiper" class="content-swiper">
                <div class="swiper-wrapper project-wrapper">
                    <div class="swiper-slide project-slide">
                        <div class="s-project-content">
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
                            <div class="s-project-content-background">
                                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide project-slide">
                        <div class="s-project-content">
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
                            <div class="s-project-content-background">
                                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide project-slide">
                        <div class="s-project-content">
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
                            <div class="s-project-content-background">
                                <img src="{{ asset('assets/img/project-house.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next project-button-next">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 39.84L31.04 26.8C32.58 25.26 32.58 22.74 31.04 21.2L18 8.16" stroke="#333333" stroke-width="5.33333" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>

                <div class="swiper-button-prev project-button-prev">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 39.84L31.04 26.8C32.58 25.26 32.58 22.74 31.04 21.2L18 8.16" stroke="#333333" stroke-width="5.33333" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div> 
            </div>
        </div>
 
    </section>

    <section id="testimonial" class="s-testimonial">
        <div class="container">
            <div class="s-testimonial-head">
                <div class="s-testimonial-head-path">
                    <img src="{{ asset('assets/icon/logo-op.png') }}" alt="">
                    <h2>Our Testimonial</h2>
                </div>
                <div class="s-testimonial-head-tittle">
                    <h1>Yang Klien Kami Katakan</h1>
                </div>
            </div>

            <div class="swiper mySwiper s-testimonial-swiperimage" id="swiperTestimoniImage">
                <div class="swiper-wrapper s-testimonial-swiperimage-wrapper">
                    <div class="swiper-slide s-testimonial-swiperimage-wrapper-slide">
                        <div class="swiper-slide s-testimonial-swiperimage-wrapper-slide-image">
                            <img src="{{ asset('assets/img/testimoni-img.png') }}" alt="klien">
                        </div>
                    </div>
                    <div class="swiper-slide s-testimonial-swiperimage-wrapper-slide">
                        <div class="swiper-slide s-testimonial-swiperimage-wrapper-slide-image">
                            <img src="{{ asset('assets/img/testimoni-img.png') }}" alt="klien">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper mySwiper s-testimonial-swiperteks" id="swiperTestimoniText">
                <div class="swiper-wrapper s-testimonial-swiperteks-wrapper">
                    <div class="swiper-slide s-testimonial-swiperteks-wrapper-slide">
                        <div class="s-testimonial-swiperteks-wrapper-slide-quotes">
                            <img src="{{ asset('assets/icon/testimoni-quote.png') }}" alt="">
                            <p>GWA Group membantu hotel <br> saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                        </div>
                        <div class="s-testimonial-swiperteks-wrapper-slide-name">
                            <img src="{{ asset('assets/icon/ceo.png') }}" alt="">
                            <div class="s-testimonial-swipertekswrapper-slide-name-owner">
                                <h4>CHAIM DESMOND</h4>
                                <h5>CEO of RED Hotel</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide s-testimonial-swipertekswrapper-slide">
                        <div class="s-testimonial-swiperteks-wrapper-slide-quotes">
                            <img src="{{ asset('assets/icon/testimoni-quote.png') }}" alt="">
                            <p>GWA Group membantu hotel <br> saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                        </div>
                        <div class="s-testimonial-swiperteks-wrapper-slide-name">
                            <img src="{{ asset('assets/icon/ceo.png') }}" alt="">
                            <div class="s-testimonial-swipertekswrapper-slide-name-owner">
                                <h4>CHAIM BILL</h4>
                                <h5>CEO of yellow Hotel</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="s-testimonial-swiperbutton">
                <div class="swiper-button-next s-testimonial-swiperbutton-buttonnext">
                    <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="vuesax/linear/arrow-right">
                            <path id="Vector" d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </div>
                <div class="swiper-button-prev s-testimonial-swiperbutton-buttonprev">
                    <svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="vuesax/linear/arrow-left">
                            <path id="Vector" d="M18.329 41.1333L31.6105 27.8518C33.179 26.2833 33.179 23.7166 31.6105 22.1481L18.329 8.86664" stroke="white" stroke-width="3.55556" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
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
                    <h1>Ingin Mendiskusikan <br> Bisnis Pariwisata Anda ?</h1>
                </div>

                <hr class="s-kontak-hr">

                <div class="s-kontak-head-deskripsi">
                    <p>Ada kepentingan bisnismu yang ingin <br>didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !</p>
                </div>

            </div>

            <div class="s-kontak-form">

                <form>
                    <div class="form-grup">
                        <label class="form-label form-label-nama" for="nama-lengkap">Nama Lengkap</label>
                        <input class="form-input form-input-nama" type="text" id="nama-lengkap" placeholder="Masukkan Nama Lengkap">
                    </div>
                    
                    <div class="form-grup">
                        <label class="form-label form-label-perusahaan" for="nama-perusahaan">Nama Perusahaan</label>
                        <input class="form-input form-input-perusahaan" type="text" id="nama-perusahaan" placeholder="Masukkan Nama Perusahaan">
                    </div>

                    <div class="form-grup">
                    <label class="form-label form-label-nomor" class="form-label-nomor" for="nomor-whatsapp">Nomor Whatsapp Aktif</label>
                    <input class="form-input form-input-nomor" type="text" id="nomor-whatsapp" placeholder="Masukkan Nomor Whatsapp">
                    </div>
                        
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

            <div class="s-footer-inform">
                <div class="s-footer-inform-section">
                    <h4>Halaman Utama</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                    </ul>
                </div>
                <div class="s-footer-inform-section">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Daftar Hotel</a></li>
                    </ul>
                </div>
                <div class="s-footer-inform-section">
                    <h4>Temukan Kami</h4>
                    <ul>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="s-footer-inform-section">
                    <h4>Social Media</h4>
                    <div class="s-footer-inform-section-social-media">
                        <img src="{{ asset('assets/icon/facebook.png') }}" alt="">
                        <img src="{{ asset('assets/icon/youtube.png') }}" alt="">
                        <img src="{{ asset('assets/icon/facebook.png') }}" alt="">
                    </div>
                </div>
            </div>


            <hr>

            <div class="s-footer-action">

                <div class="s-footer-action-teks">
                        <ul>
                            <li><a href="#">Pemberitahuan Privasi</a></li>
                            <li><a href="#">Syarat dan Ketentuan</a></li>
                        </ul>
                </div>

                <div class="s-footer-trasnlate">
                    <img src="{{ asset('assets/icon/translate.png') }}" alt="">

                </div>

            </div>

            <div class="s-footer-copyright">
                <a href="#">© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </a>
            </div>
            

        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var projectSwiper = new Swiper('.project-swiper', {
            cssMode: true,
            navigation: {
                nextEl: '.project-button-next',
                prevEl: '.project-button-prev',
            },
            pagination: {
                el: '.project-pagination',
            },
            mousewheel: true,
            keyboard: true,
        });

        const swiperTestimoniImage = new Swiper('#swiperTestimoniImage', {
            navigation: {
                nextEl: '.s-testimonial-buttonnext',
                prevEl: '.s-testimonial-buttonprev',
            },
            effect: 'slide',
            loop: true,
            breakpoints: {
                0: {},
                768: {
                    navigation: {
                        nextEl: '.s-testimonial-buttonnext',
                        prevEl: '.s-testimonial-buttonprev',
                    },
                },
            },
        });

        const swiperTestimoniText = new Swiper('#swiperTestimoniText', {
            allowTouchMove: false,
            loop: true,
            effect: 'fade',
        });

        swiperTestimoniImage.controller.control = swiperTestimoniText;
        swiperTestimoniText.controller.control = swiperTestimoniImage;
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