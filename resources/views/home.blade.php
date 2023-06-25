<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Digital Byte Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
        .owl-carousel,
        .owl-carousel .owl-item {
            -webkit-tap-highlight-color: transparent;
            position: relative
        }

        .owl-carousel {
            display: none;
            width: 100%;
            z-index: 1
        }

        .owl-carousel .owl-stage {
            position: relative;
            -ms-touch-action: pan-Y;
            touch-action: manipulation;
            -moz-backface-visibility: hidden
        }

        .owl-carousel .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0
        }

        .owl-carousel .owl-stage-outer {
            position: relative;
            overflow: hidden;
            -webkit-transform: translate3d(0, 0, 0)
        }

        .owl-carousel .owl-item,
        .owl-carousel .owl-wrapper {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0)
        }

        .owl-carousel .owl-item {
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-touch-callout: none
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%
        }

        .owl-carousel .owl-dots.disabled,
        .owl-carousel .owl-nav.disabled {
            display: none
        }

        .no-js .owl-carousel,
        .owl-carousel.owl-loaded {
            display: block
        }

        .owl-carousel .owl-dot,
        .owl-carousel .owl-nav .owl-next,
        .owl-carousel .owl-nav .owl-prev {
            cursor: pointer;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            background: 0 0;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit
        }

        .owl-carousel.owl-loading {
            opacity: 0;
            display: block
        }

        .owl-carousel.owl-hidden {
            opacity: 0
        }

        .owl-carousel.owl-refresh .owl-item {
            visibility: hidden
        }

        .owl-carousel.owl-drag .owl-item {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel.owl-grab {
            cursor: move;
            cursor: grab
        }

        .owl-carousel.owl-rtl {
            direction: rtl
        }

        .owl-carousel.owl-rtl .owl-item {
            float: right
        }

        .owl-carousel .animated {
            animation-duration: 1s;
            animation-fill-mode: both
        }

        .owl-carousel .owl-animated-in {
            z-index: 0
        }

        .owl-carousel .owl-animated-out {
            z-index: 1
        }

        .owl-carousel .fadeOut {
            animation-name: fadeOut
        }

        @keyframes fadeOut {
            0% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        .owl-height {
            transition: height .5s ease-in-out
        }

        .owl-carousel .owl-item .owl-lazy {
            opacity: 0;
            transition: opacity .4s ease
        }

        .owl-carousel .owl-item .owl-lazy:not([src]),
        .owl-carousel .owl-item .owl-lazy[src^=""] {
            max-height: 0
        }

        .owl-carousel .owl-item img.owl-lazy {
            transform-style: preserve-3d
        }

        .owl-carousel .owl-video-wrapper {
            position: relative;
            height: 100%;
            background: #000
        }

        .owl-carousel .owl-video-play-icon {
            position: absolute;
            height: 80px;
            width: 80px;
            left: 50%;
            top: 50%;
            margin-left: -40px;
            margin-top: -40px;
            background: url(owl.video.play.png) no-repeat;
            cursor: pointer;
            z-index: 1;
            -webkit-backface-visibility: hidden;
            transition: transform .1s ease
        }

        .owl-carousel .owl-video-play-icon:hover {
            -ms-transform: scale(1.3, 1.3);
            transform: scale(1.3, 1.3)
        }

        .owl-carousel .owl-video-playing .owl-video-play-icon,
        .owl-carousel .owl-video-playing .owl-video-tn {
            display: none
        }

        .owl-carousel .owl-video-tn {
            opacity: 0;
            height: 100%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            transition: opacity .4s ease
        }

        .owl-carousel .owl-video-frame {
            position: relative;
            z-index: 1;
            height: 100%;
            width: 100%
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <img class="img-fluid text-white" src="img/icon/dbs-logo.png" alt="Icon" style=" height: 55px;">
                <a href="/">
                    <!-- <h4 class="text-white fw-bold m-0">Digital Byte Solutions</h4> -->
                </a>
                <div class=" ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Bogor, Jawa Barat-Indonesia</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+62 5345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class=" animated-button btn btn-sm-square btn-light text-dark rounded-circle ms-2" href=""><i
                                class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a class=" animated-button btn btn-sm-square btn-light text-dark rounded-circle ms-2" href=""><i
                                class="fa fa-envelope" aria-hidden="true"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="web-profile" class="dropdown-item">Website Profile</a>
                                <a href="web-aplikasi" class="dropdown-item">Website Aplikasi</a>
                                <a href="mobile-app" class="dropdown-item">Mobile Aplikasi</a>
                                <a href="layanan-design" class="dropdown-item">Layanan Desain</a>
                            </div>
                        </div>
                        <a href="project" class="nav-item nav-link">Projects</a>
                        <a href="contact" class="nav-item nav-link">Kontak</a>
                        <a href="about" class="nav-item nav-link">Tentang Kami</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="" class="btn btn-outline-dark rounded-pill py-2 px-3  ">Dapatkan
                            Penawaran</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 d-block" src="img/contents/carousel-3.png" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100 d-block" src="img/contents/carousel-4.png" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100 d-block" src="img/contents/carousel-5.png" alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}


    <div id="carouselHome" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> --}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="img/contents/carousel-3.png" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="img/contents/carousel-4.png" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="img/contents/carousel-5.png" alt="Image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/contents/carousel-3.png" alt="Image">

                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/contents/carousel-4.png" alt="Image">

                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/contents/carousel-5.png" alt="Image">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
    <!-- Carousel End -->


    <!-- layanan Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Layanan Digital yang Kami Tawarkan</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/icon/icon-web-profile.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Website Profile</h4>
                                <p class="mb-0">Dirancang khusus untuk memberikan gambaran menyeluruh tentang entitas
                                    yang dipresentasikan dan memberikan kesan profesional serta membangun</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-dark fw-medium" href="web-profile">Selengkapnya<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/icon/icon-web-aplikasi.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Website Aplikasi</h4>
                                <p class="mb-0">Aplikasi web dapat memiliki fungsi yang beragam, seperti platform
                                    e-commerce, sistem manajemen konten, alat kolaborasi, atau aplikasi berbasis data
                                    dan masih banyak lagi
                                </p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-dark fw-medium" href="web-aplikasi">Selengkapnya<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/icon/icon-mobile-app.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Mobile Aplikasi </h4>
                                <p class="mb-0">Aplikasi Mobile yang dirancang untuk memberikan pengalaman pengguna yang
                                    optimal pada perangkat mobile. Memiliki akses cepat serta mudah digunakan</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-dark fw-medium" href="mobile-app">Selengkapnya<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/icon/icon-design.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Layanan Desain</h4>
                                <p class="mb-0">Membantu Anda dalam menciptakan atau memperbaiki elemen-elemen desain.
                                    Layanan ini meliputi berbagai bidang seperti desain grafis, web, produk dan masih
                                    banyak lagi</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-dark fw-medium" href="layanan-design">Selengkapnya<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Layanan End -->

    <!-- Komitmen Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Komitmen Kami</h1>
            </div>
            <div class=" row g-0 feature-row align-items-center bg-dark rounded">
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-dark text-center p-3">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                            style="width:100px; height: 100px;">
                            <img class="img-fluid" src="img/icon/icon-profesional.png" alt="Icon">
                        </div>
                        <h5 class="mb-3 text-white ">Profesional</h4>
                    </div>
                </div>

                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-dark text-center p-3">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                            style="width:100px; height: 100px;">
                            <img class="img-fluid" src="img/icon/icon-ratting.png" alt="Icon">
                        </div>
                        <h5 class="mb-3 text-white">Kepuasan Pelanggan</h4>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="bg-dark text-center p-3">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                            style="width:100px; height: 100px;">
                            <img class="img-fluid" src="img/icon/icon-database.png" alt="Icon">
                        </div>
                        <h5 class="mb-3 text-white">Keamanan Informasi</h4>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-dark text-center p-3">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                            style="width:100px; height: 100px;">
                            <img class="img-fluid" src="img/icon/icon-inovasi.png    " alt="Icon">
                        </div>
                        <h5 class="mb-3 text-white">Inovasi dan Pengembangan</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Komitmen End -->


    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Project yang sudah Kami kerjakan</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project/project-zeroprak.png" alt="">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Zeropark Indonesia</h4>
                            <span>Web Aplikasi yang dirancang khusus untuk Ticketing Management System</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project/project-zeropark-mobile-app.png" alt="">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Zeropark Mobile App</h4>
                            <span>Mobile Apps yang dirancang khusus untuk Ticketing Management System</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project/project-validator.png" alt="">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Validator App</h4>
                            <span>Aplikasi yang di buat khusus untuk penukaran tiket</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5 bg-dark">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4 text-white ">Yakin masih belum mau digital ? </h1>
                    <p class="text-white">Website merupakan platform yang sangat efektif untuk menyampaikan informasi
                        tentang produk, layanan, atau organisasi Anda kepada pengguna. Anda dapat memberikan detail
                        lengkap tentang apa yang Anda tawarkan, deskripsi produk, harga, kontak, dan informasi penting
                        lainnya. Selain itu, website juga memberikan sarana komunikasi antara Anda dan pengguna.</p>
                    <p class="text-white ">Secara keseluruhan, website sangat penting dalam dunia
                        digital saat ini. Ini memberikan kehadiran online, memfasilitasi komunikasi dan promosi,
                        meningkatkan kepercayaan dan profesionalitas, serta memberikan aksesibilitas yang lebih luas
                        bagi pengguna. Dalam lingkungan bisnis yang semakin terhubung secara online, memiliki website
                        yang baik menjadi suatu keharusan.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4 text-white">Dapatkan penawaran gratis</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Nama</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Telepon</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Website Profile</option>
                                    <option value="">Website Aplikasi</option>
                                    <option value="">Mobile Aplikasi</option>
                                    <option value="">Layanan Desain</option>
                                </select>
                                <label for="service">Pilih Layanan</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Pesan</label>
                            </div>
                        </div>
                        <div class="col-12 text-center text-white">
                            <button class="btn btn-outline-light w-100 py-3" type="submit">Kirim Sekarang!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Kami siap membantu Anda</h1>
            </div>
            <div class="row g-4 ">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" team-item rounded overflow-hidden pb-4 ">
                        <img class="img-fluid mb-4" src="img/team/team-6.png" alt="">
                        <h5>Alex Robin</h5>
                        <span class="text-dark">Founder & CEO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fa fa-envelope"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-git"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team/team-6.png" alt="">

                        <h5>Dery Rhamdani</h5>
                        <span class="text-dark">Co Founder</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fa fa-envelope"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-git"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team/team-6.png" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-dark">Executive Manager</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fa fa-envelope"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-git"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team/team-6.png" alt="">
                        <h5>Dery Rhamdani</h5>
                        <span class="text-dark">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fa fa-envelope"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-git"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl pt-5" id="clients">
        <div class="container">
            <div class="text-center mx-auto  text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-5">Klien setia Kami</h1>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">
                <img src="img/clients/client-6.png" alt="">
                <img src="img/clients/client-7.png" alt="">
                <img src="img/clients/client-8.png" alt="">
            </div>
        </div>
    </div>
    </div>
    <!-- Testimonial End -->

    <!-- FAQ Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-5">Pertanyaan yang Sering Diajukan</h1>
                </div>
            </div>
            <div class="accordion-block wow fadeInUp" data-wow-delay="0.3 ">
                <div class="accordion row" id="accordionPanelsStayOpenExample">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button text-black fs-7 text-dark" type=" button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Bagaimana jika website sudah selesai dan perlu revisi ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Setelah website selesai diproses, maksimal 1 kali revisi. Jika masih ada revisi
                                    selanjutnya, maka akan dikenakan biaya update halaman sebesar 20.000 per halaman
                                    (belum termasuk PPN). Revisi hanya sebatas mengubah/mengurangi konten yang sudah
                                    ada. Jika menambah konten baru, maka akan dikenakan biaya update.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Jika ingin update website apakah dikenakan biaya lagi ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Anda mendapatkan fasilitas free update halaman website setiap bulannya sesuai paket
                                    yang Anda gunakan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Bagaimana jika saya mengalami kendala ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Jangan khawatir, tim kami siaga, tanggap, dan responsif untuk menjawab keluhan dan
                                    kendala yang Anda alami. Dengan senang hati, kami akan membantu Anda dalam mengelola
                                    website Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                    Kapan saya bisa mulai membuat website ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Setelah Anda mengonfirmasi pesanan dan melakukan pembayaran, tim developer kami akan
                                    segera menghubungi dan berdiskusi dengan Anda mengenai website yang diinginkan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Berapa biaya untuk pembuatan website ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Jika kamu tidak menemukan paket yang sesuai, tidak perlu khawatir, kami pastikan
                                    kamu akan dapat harga terbaik tanpa kehilangan fitur yang kamu butuhkan. Silahkan
                                    hubungi team konsultan kami untuk mendapatkan harga terbaik. Jangan tergiur dengan
                                    harga murah, pastikan sudah menjawab kebutuhan bisnis kamu.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header " id="panelsStayOpen-headingsix">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                    Bagaimana cara order jasa pembuatan website ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse "
                                aria-labelledby="panelsStayOpen-headingsix">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Untuk order layanan pembuatan website, silahkan hubungi team konsultan kami melalui
                                    live chat yang tersedia di pojok kanan bawah atau hubungi langsung nomor telepon +62
                                    812-9017-6697 . Juga bisa dengan mengirimkan pesan ke email csdbs.com, atau bisa
                                    booking jadwal untuk ketemu di kantor kami.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
    @include('footer')

</body>

</html>