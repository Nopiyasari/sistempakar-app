{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('templateadmin') }}/img/favicon.ico" rel="icon">

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
    <div class="container-xxl position-relative bg-light d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-white rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>Daftar Akun</h3>
                        </div>

                        <form class="needs-validation" action="{{ route('simpanregistrasi') }}" method="POST">
                        @method('POST')
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="hidden" class="form-control" id="level" value="user" name="level" placeholder="Level" >
                            <label for="level">Level</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Register</button>
                    </form>
                        <p class="text-center mb-0">Sudah punya akun? <a href="{{ url('login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Register</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('azzara') }}/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('azzara') }}/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['{{ asset('azzara') }}/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('azzara') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('azzara') }}/assets/css/azzara.min.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-signup animated fadeIn">
            <h3 class="text-center">Sign Up</h3>
            <form class="needs-validation" action="{{ route('simpanregistrasi') }}" method="POST">
                @method('POST')
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="name" name="name" type="text"
                            class="form-control input-border-bottom" required>
                        <label for="name" class="placeholder">Nama Lengkap</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email"
                            class="form-control input-border-bottom" required>
                        <label for="email" class="placeholder">Email</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="passwordsignin" name="passwordsignin" type="password"
                            class="form-control input-border-bottom" required>
                        <label for="passwordsignin" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>

                <button type="submit" class="btn btn-danger btn-rounded btn-login mr-3">Register</button>
                    <div class="form-action">
                        <a href="{{ url('registrasi') }}" id="show-signin"
                            class="btn btn-primary btn-rounded btn-login mr-3">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <script src="{{ asset('azzara') }}/assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="{{ asset('azzara') }}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="{{ asset('azzara') }}/assets/js/core/popper.min.js"></script>
        <script src="{{ asset('azzara') }}/assets/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('azzara') }}/assets/js/ready.js"></script>
</body>

</html> --}}

<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Register</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('azzara') }}/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('azzara') }}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{ asset('azzara') }}/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('azzara') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('azzara') }}/assets/css/azzara.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">

		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
            <form class="needs-validation" action="{{ route('simpanregistrasi') }}" method="POST">
                @method('POST')
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="name" name="name" type="text"
                            class="form-control input-border-bottom" required>
                        <label for="name" class="placeholder">Nama Lengkap</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email"
                            class="form-control input-border-bottom" required>
                        <label for="email" class="placeholder">Email</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="passwordsignin" name="passwordsignin" type="password"
                            class="form-control input-border-bottom" required>
                        <label for="passwordsignin" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>

                <button type="submit" class="btn btn-danger btn-rounded btn-login mr-3">Register</button>
                    <div class="form-action">
                        <a href="{{ url('registrasi') }}" id="show-signin"
                            class="btn btn-primary btn-rounded btn-login mr-3">Cancel</a>
                    </div>
                </div>
            </form>
		</div>
	</div>
	<script src="{{ asset('azzara') }}/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{ asset('azzara') }}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{ asset('azzara') }}/assets/js/core/popper.min.js"></script>
	<script src="{{ asset('azzara') }}/assets/js/core/bootstrap.min.js"></script>
	<script src="{{ asset('azzara') }}/assets/js/ready.js"></script>
</body>
</html>



