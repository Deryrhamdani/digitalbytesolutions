<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kontak - Digital Byte Solutions</title>
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

    <!-- Navbar Start -->
    @include('header')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-xxl  mb-5 px-0  wow fadeIn" data-wow-delay="0.1s">
        <img class="w-100" src="img/contents/customer-service.png" alt="Image">
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Kontak Kami</h1>
                <p class="fs-5 fw-medium text-dark">Jika Anda Memiliki Pertanyaan, Silahkan Hubungi Kami</p>
            </div>
            <br></br>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Yakin masih belum mau digital ?</h3>
                    <p class="text-dark">Website merupakan platform yang sangat efektif untuk menyampaikan informasi
                        tentang produk, layanan, atau organisasi Anda kepada pengguna. Anda dapat memberikan detail
                        lengkap tentang apa yang Anda tawarkan, deskripsi produk, harga, kontak, dan informasi penting
                        lainnya. Selain itu, website juga memberikan sarana komunikasi antara Anda dan pengguna.</p>
                    <p class="text-dark ">Secara keseluruhan, website sangat penting dalam dunia
                        digital saat ini. Ini memberikan kehadiran online, memfasilitasi komunikasi dan promosi,
                        meningkatkan kepercayaan dan profesionalitas, serta memberikan aksesibilitas yang lebih luas
                        bagi pengguna. Dalam lingkungan bisnis yang semakin terhubung secara online, memiliki website
                        yang baik menjadi suatu keharusan.</p>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
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
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark rounded-pill py-3 px-5" type="submit">Kirim Sekarang!</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Detail Kontak</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-dark rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Kantor Kami</h6>
                            <span>Bogor, Jawa Barat-Indonesia</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-dark rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Telepon</h6>
                            <span>+62 5345 67890</span>
                        </div>
                    </div>

                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-dark rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Email</h6>
                            <span>csdbs.com</span>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2366627157926!2d106.81803767423874!3d-6.617493364687797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c607d6b243e3%3A0x4dda08c054f53b9a!2sBantar%20Kemang!5e0!3m2!1sen!2sid!4v1687532779964!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->

</body>

</html>