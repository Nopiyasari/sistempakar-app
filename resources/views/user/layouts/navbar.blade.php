<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="nav-link scrollto {{ Request::is('tentang-kami') ? 'active' : '' }}" href="tentang-kami">Tentang</a>
        </li>
        <li class="dropdown"><a href="infopenyakit"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('infopenyakit') ? 'active' : '' }}"
                        href="infopenyakit">Penyakit Mata</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto {{ Request::is('kontak') ? 'active' : '' }}" href="kontak">kontak</a></li>
        <li><a class="getstarted scrollto" href="login">Login</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
