
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('azzara') }}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->name }}
                            <span class="user-level">Administrator</span>

                        </span>
                    </a>
                    {{-- <div class="clearfix"></div> --}}
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="admin">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fa fa-users"></i>
                        <p>Data Pengguna</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="data_admin">
                                    <span class="sub-item">Data Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="data_user">
                                    <span class="sub-item">Data User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="penyakit">
                        <i class="fa fa-plus-square"></i>
                        <p>Data Penyakit</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="/gejala">
                        <i class="fa fa-plus-square"></i>
                        <p>Data Gejala</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="rule">
                        <i class="fa fa-list-alt"></i>
                        <p>Data Rule</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="log-konsultasi">
                        <i class="far fa-chart-bar"></i>
                        <p>Data Riwayat</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
