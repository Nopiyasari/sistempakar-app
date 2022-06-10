<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIPTA-ADMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Favicon -->
    <link href="{{ asset('templateadmin') }}/img/eye.png" rel="icon">
    <link href="{{ asset('templateadmin') }}/img/eye.png" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('templateadmin') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('templateadmin') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('templateadmin') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('templateadmin') }}/css/style.css" rel="stylesheet">


</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('admin.dashboard.layouts.sidebar')
        <div class="content">
            @include('admin.dashboard.layouts.navbar')
            @yield('container')
        </div>
    </div>
            {{-- <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded- p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Nopiya Sari</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End --> --}}
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/chart/chart.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('templateadmin') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('templateadmin') }}/js/main.js"></script>

</body>

</html>

