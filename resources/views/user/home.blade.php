@extends('user.layouts.main')

<body>


    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Selamat datang di SIPTA</h1>
                    <h2>Gunakanlah sistem ini untuk melakukan diagnosa penyakit pada mata</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="login" class="btn-get-started scrollto">Konsultasi Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('arsha') }}/assets/img/bg 2.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    {{-- <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Kami</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success">
                        <p>Sistem pakar ini dibangun hanya untuk diagnosa penyakit Mata dengan menggunakan
                            metode <i>Forward Chaining</i>. Sistem ini hanya dapat digunakan oleh pakar dan
                            pasien (seseorang yang mengalami penyakit mata) klinik eyecenter indramayu.
                            Terimakasih
                        </p>
                        <a href="tentang-kami" class="btn-learn-more">selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section --> --}}

    {{-- <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">

                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Sistem pakar ini dibangun hanya untuk diagnosa penyakit Mata dengan menggunakan
                        metode <i>Forward Chaining</i>. Sistem ini hanya dapat digunakan oleh pakar dan
                        pasien (seseorang yang mengalami penyakit mata) klinik eyecenter indramayu.
                        Terimakasih
                    </p>

                </div>
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li>
                    </ul>

                    <a href="tentang-kami" class="btn-learn-more">Baca Selengkapnya</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Petunjuk Penggunaan</h2>
                <p>Lihatlah petunjuk dibawah sini untuk mengetahui cara penggunaan aplikasi sitem pakar penyakit mata.
                </p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Login</a></h4>
                        <p>menu ini digunakan untuk masuk ke dalam sebuah aplikasi atau sebuah web.
                            jika kamu sudah melakukan pendaftaran akun, maka kamu bisa masuk ke aplikasi dengan cara
                            memasukkan email dan password pada kolom email dan password pada kolom password
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Registrasi Akun</a></h4>
                        <p>Registrasi akun disini berfungsi untuk membuat sebuah akun yang nantiya digunakan untuk
                            memasuki halaman website sistem pakar,
                            dengan memasukkan atau mendaftarkan nama lengkap, email dan juga password.
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Form Pasien</a></h4>
                        <p>Setelah anda berhasil masuk atau login anda akan langsung diarahkan pada form pasien yang
                            dimana disini harus diisi terlebih dahulu sebelum melakukan diagnosa,
                            form pasien diisi sesuai pasien yang akan di diagnosa penyakit matanya.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">Diagnosa</a></h4>
                        <p>Setelah mengisi data pasien maka langsung masuk ke halaman diagnosa dimana anda melakukan
                            diagnosa dengan memilih gejala yang ada sesuai yang anda rasakan.</p>
                        <p>Setelah memilih gejala klik yombol proses lalu akan muncul hasil dari gejala yang dipilih
                            yaitu terdiagnosa sebagai penyakit apa.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Kontak</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Jend. Sudirman No.224, Karanganyar, Kec. Indramayu,Kabupaten Indramayu, Jawa Barat
                                45123</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>eyecenterindramayu@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>(0234) 7128243</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-instagram"></i>
                            <h4>Sosial Media:</h4>
                            <p>Indramayueyecenter</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4293027502786!2d108.3346774143113!3d-6.3384008637790785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebf06b25bb9ad%3A0xe9efb50c8da7fdc4!2sKlinik%20Utama%20Indramayu%20Eye%20Center!5e0!3m2!1sid!2sid!4v1658933573313!5m2!1sid!2sid" width="1050" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>

        </div>
    </section>
    </main><!-- End #main -->

</body>
