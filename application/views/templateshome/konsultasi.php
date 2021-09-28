<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Deteksi Martabak - Konsultasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>template_home/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>template_home/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>template_home/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>template_home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template_home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>template_home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template_home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>template_home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>template_home/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Appland - v4.5.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Sistem Deteksi Martabak</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="template_home/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>home">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>home/informasi">Informasi</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>home/konsultasi">Konsultasi</a></li>
                    <li><a class="getstarted scrollto" href="<?= base_url() ?>login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
                    <div>
                        <h1>SELAMAT DATANG DI SISTEM DETEKSI MARTABAK</h1>
                        <h2>SISTEM PAKAR DETEKSI MARTABAK DENGAN MENGGUNAKAN METODE CBR (CASE BASED REASONING)</h2>
                        <a href="<?= base_url() ?>home/konsultasi" class="download-btn"><i class="bx bxl"></i> Mulai Konsultasi</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                    <img src="<?= base_url() ?>assets/img/logo_martabak.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar Gejala Martabak</h2>

                </div>
                <div class="row content">
                    <div class="col-md-12 pt-2" data-aos="fade-up">
                        <div class="table-responsive">
                            <form action="<?= base_url() ?>home/proses_konsultasi" method="post">
                                <table class="table table-striped table-bordered" width="100%">
                                    <?php foreach ($gejala as $g) : ?>
                                        <tr>
                                            <td>
                                                <li><input class="form-check-input" name="kd_gejala[]" id="kd_gejala" type="checkbox" value="<?= $g['kd_gejala'] ?>"><?= $g['gejala'] ?></li>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary mt-4">Proses</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>



                    </div>
                </div>

            </div>
        </section><!-- End Gallery Section -->




    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Sistem Deteksi Martabak</h3>
                        <p>
                            Wates <br>
                            Babelan<br>
                            Kota Bekasi <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>template_home/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>template_home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>template_home/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>template_home/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>template_home/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>template_home/js/main.js"></script>

</body>

</html>