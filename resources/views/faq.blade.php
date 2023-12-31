<!DOCTYPE html>
<html lang="en">

<head>
@include('gtag')

    <meta charset="utf-8">
    <title>FAQ | Digital Byte Solutions</title>
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
    <div class="container- wow fadeIn" data-wow-delay="0.1s">
        <img class="w-100" src="img/contents/faq.png" alt="Image">
    </div>
    <!-- Page Header End -->
    <!-- Faq Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center mx-auto text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class=" mb-5">Pertanyaan yang sering diajukan</h1>
                </div>
            </div>
            <div class="accordion-block wow fadeInUp" data-wow-delay="0.3 ">
                <div class="accordion row" id="accordionPanelsStayOpenExample">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button text-black fs-7 text-dark" type=" button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Bagaimana jika website sudah selesai dan perlu revisi ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
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
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Jika ingin update website apakah dikenakan biaya lagi ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Anda mendapatkan fasilitas free update halaman website setiap bulannya sesuai paket
                                    yang Anda gunakan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Bagaimana jika saya mengalami kendala ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
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
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                    Kapan saya bisa mulai membuat website ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Setelah Anda mengonfirmasi pesanan dan melakukan pembayaran, tim developer kami akan
                                    segera menghubungi dan berdiskusi dengan Anda mengenai website yang diinginkan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Berapa biaya untuk pembuatan website ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Jika kamu tidak menemukan paket yang sesuai, tidak perlu khawatir, kami pastikan kamu akan dapat harga terbaik tanpa kehilangan fitur yang kamu butuhkan. Silahkan hubungi team konsultan kami untuk mendapatkan harga terbaik. Jangan tergiur dengan harga murah, pastikan sudah menjawab kebutuhan bisnis kamu.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header " id="panelsStayOpen-headingsix">
                                <button class="accordion-button collapsed text-black fs-7 text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                                    Bagaimana cara order jasa pembuatan website ?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingsix">
                                <p></p>
                                <div class="accordion-body fs-7 fw-500 pt-0">
                                    Untuk order layanan pembuatan website, silahkan hubungi team konsultan kami melalui live chat yang tersedia di pojok kanan bawah atau hubungi langsung nomor telepon +62 812-9017-6697 . Juga bisa dengan mengirimkan pesan ke email csdbs.com, atau bisa booking jadwal untuk ketemu di kantor kami.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq End -->
    <!-- Footer Start -->
    @include('footer')
</body>

</html>