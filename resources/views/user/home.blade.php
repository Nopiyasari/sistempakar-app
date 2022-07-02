@extends('user.layouts.main')
@include('user.layouts.navbar')

<body>

    {{-- <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Selamat datang di SIPTA</h1>
            <h2>Gunakanlah sistem ini untuk melakukan diagnosa penyakit pada mata</h2>
            <a href="/login" class="btn-get-started scrollto">Konsultasi Sekarang <i class=" me-2 bi bi-arrow-right-circle"></i></a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
         <section id="why-us" class="why-us">
            <div class="container">

            </div>

        </section><!-- End Why Us Section --> --}}

        <section id="hero" class="d-flex align-items-center">
            <div class="container"><div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up">
                    <div>
                        <h1>Selamat datang di SIPTA</h1>
                        <h2>Gunakanlah sistem ini untuk melakukan diagnosa penyakit pada mata</h2>
                        <a href="/login" class="btn-get-started scrollto">Konsultasi Sekarang <i class=" me-2 bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="fade-up">
                    <img src="{{ asset('templateuser') }}/asset/img/home-bg.png" class="img-fluid" alt=""></div>
                </div>
            </div>
        </section>

        <section id="about" class="about ">
            <div class="container mt-5">

                <div class="section-title">
                    <h2>Petunjuk Sistem Pakar</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Sistem Pakar Penyakit Mata</h3>
                        <p>Sistem pakar merupakan suatu program aplikasi komputerisasi yang berusaha menirukan proses penalaran
                            dari seorang ahli pakar atau dokter dalam memecahkan masalah atau bisa dikatakan sebagai duplikat
                            pengetahuan untuk diproses pemecahan masalahnya.
                            dengan Sistem pakar ini pasien bisa melakukan konsultasi untuk skreaning awal dari penyakit mata
                            yang dialami. dan dengan adanya sistem pakar ini akan lebih menghemat biaya dan tenaga karena
                            konsultasi dapat dilakukan dimana saja tanpa harus pergi ke klinik atau rumah sakit.
                        </p>
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-person-plus"></i></div>
                            <h4 class="title"><a href="">Daftar akun</a></h4>
                            <p class="description">Jika belum mempunyai akun untuk melakukan proses diagnosa segera daftar akun melalui halaman daftar akun</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-pencil-square"></i></div>
                            <h4 class="title"><a href="">Mulai Diagnosa</a></h4>
                            <p class="description">Setelah melakukan pendaftaran akun mulai diagnosa/konsultasi dengan akun yang anda punya</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-journal-check"></i></div>
                            <h4 class="title"><a href="">Hasil diagnosa</a></h4>
                            <p class="description">Setelah melakukan diagnosa didapatkan hasil diagnosa yang diinginkan </p>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

</body>
