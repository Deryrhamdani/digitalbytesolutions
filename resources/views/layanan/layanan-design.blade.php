    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title> Layanan Design | Digital Byte Solutions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.png" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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
    </head>

    <body>
        <!-- Header Start -->
        <!-- Navbar Start -->
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                            <a class=" animated-button btn btn-sm-square btn-light text-dark rounded-circle ms-2" href=""><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a class=" animated-button btn btn-sm-square btn-light text-dark rounded-circle ms-2" href=""><i class="fa fa-envelope" aria-hidden="true"></i></i></a>
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
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
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
        <!-- Header End -->
        <!-- Page Header Start -->
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <img class="w-100" src="img/contents/image-layanan-desain.png" alt="Image">
        </div>
        <!-- Page Header End -->

        <!-- Deskripsi Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-dark">Sekilas tentang</h5>
                        <h1 class="mb-4 text-dark">Layanan Desain</h1>
                        <p class="mb-4">Layanan desain ini sangat embantu Anda dalam menciptakan atau memperbaiki elemen-elemen desain. Layanan ini meliputi berbagai bidang seperti desain grafis, web, produk dan masih banyak lagi. Selain itu Layanan desain membantu menciptakan tampilan yang profesional dan terpercaya untuk merek atau bisnis Anda. Desain yang baik dapat meningkatkan citra perusahaan, memberikan kesan bahwa Anda serius dalam bisnis Anda, dan membangun kepercayaan dengan pelanggan atau pengguna.</p>

                    </div>

                    <div class="col-lg-5">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="img/icon/content-design.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Deskripsi End -->
        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->
    </body>

    </html>