<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">eyecenterindramayu@gmail.com</a>
            <i class="bi bi-phone"></i> (0234) 7128243
        </div>
        {{-- <div class="d-none d-lg-flex social-links align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/indramayueyecenter/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div> --}}
    </div>
</div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul style="list-style-type: ">
                <li><a class="nav-link scrollto {{ Request::is('home') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a></li>
                <li class="dropdown "><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/infopenyakit">Penyakit Mata</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="/kontak">Kontak</a></li>
                {{-- @can('auth')
                    <li><div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('templateadmin') }}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="/sistempakar" class="dropdown-item">Log Out</a>
                        </div>
                    </div></li>
                @endcan --}}
                <li>
                    <a href="/login">
                        <button class="btn btn-primary scrollto" type="button">Login</button>
                    </a>

                </li>
            </ul>
        </nav><!-- .navbar -->


    </div>




