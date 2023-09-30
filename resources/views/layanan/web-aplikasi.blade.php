<!DOCTYPE html>
<html lang="en">

<head>
    @include('gtag')
    <meta charset="utf-8">
    <title> Web Aplikasi | Digital Byte Solutions</title>
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

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar -->
    @include('header')
    <!-- End Navbar -->

    <!-- Page Header Start -->
    <div class="container wow fadeIn" data-wow-delay="0.1s">
        <img class="w-100 border-image" src="img/contents/image-web-aplikasi.png" alt="Image">
    </div>
    <!-- Page Header End -->
    <!-- Deskripsi Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-3">
                    <img class="image-responsive wow fadeInUp" data-wow-delay="0.5s" src="img/icon/content-web-aplikasi.png">
                </div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-dark">Sekilas tentang</h5>
                    <h1 class="mb-4 text-dark">Website Aplikasi</h1>
                    <p class="mb-4 text-justify">Aplikasi web dapat memiliki fungsi yang beragam, seperti platform e-commerce, sistem manajemen konten, alat kolaborasi, atau aplikasi berbasis data dan masih banyak lagi</p>
                    <p class="mb-4 text-justify">Keuntungan utama dari web aplikasi adalah aksesibilitasnya yang mudah. Pengguna hanya perlu mengakses web browser mereka dan terhubung ke internet untuk menggunakan aplikasi tersebut, tanpa perlu mengunduh atau menginstal perangkat lunak tambahan. Hal ini memungkinkan pengguna untuk mengakses aplikasi dari berbagai perangkat, termasuk komputer, laptop, tablet, atau ponsel pintar.</p>

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