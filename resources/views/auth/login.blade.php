<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
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
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Login Akun</h3>
            <form class="needs-validation" action="{{ route('postlogin') }}" method="POST">
                @method('POST')
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="text" class="form-control input-border-bottom">
                        <label for="email" class="placeholder">Email</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom">
                        <label for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>

                    <button type="submit"
                        class="btn btn-primary btn-rounded btn-login d-flex justify-content-center">Login</button>
                    <div class="login-account">
                        <span class="msg">Belum Memiliki Akun ?</span>
                        <a href="{{ url('registrasi') }}" id="show-signup" class="link">Daftar akun</a>
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


