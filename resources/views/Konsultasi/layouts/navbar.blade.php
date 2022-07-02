<!-- ======= Top Bar ======= -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul style="list-style-type: ">
                <li><a class="nav-link scrollto {{ Request::is('daftar') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::is('diagnosa') ? 'active' : '' }}" href="/tentang">Diagnosa</a></li>
                <li><a class="nav-link scrollto" href="/hasil">Riwayat Diagnosa</a></li>
                <li><div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{ asset('templateadmin') }}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="/profil" class="dropdown-item">My Profile</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                    </div>
                </div></li>
            </ul>
        </nav><!-- .navbar -->
    </div>




