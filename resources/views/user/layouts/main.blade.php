<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sipta-EyeCenter Indramayu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('arsha') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('arsha') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('arsha') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('arsha') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('arsha') }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('user') }}/profile/css/update.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Sistem Pakar</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            @include('user.layouts.navbar')

        </div>
    </header><!-- End Header -->



    <main id="main">

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>Sipta-Indramayu</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('arsha') }}/assets/vendor/aos/aos.js"></script>
        <script src="{{ asset('arsha') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('arsha') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ asset('arsha') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ asset('arsha') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('arsha') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="{{ asset('arsha') }}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('arsha') }}/assets/js/main.js"></script>


</body>

</html>
