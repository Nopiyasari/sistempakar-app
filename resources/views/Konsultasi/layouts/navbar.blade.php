
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto {{ Request::is('diagnosa') ? 'active' : '' }}" href="diagnosa">Diagnosa</a></li>
            <li><a class="nav-link scrollto {{ Request::is('hasil') ? 'active' : '' }}" href="hasil">Riwayat Konsultasi</a>
            </li>
            <li class="dropdown"><a href="/"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('profil_user') ? 'active' : '' }}"
                            href="profil_user">My Profil</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('logout') ? 'active' : '' }}"
                        href="/">Logout</a></li>

                </ul>
            </li>
        </ul>
    </nav><!-- .navbar -->





