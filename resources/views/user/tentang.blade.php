@extends('user.layouts.main')
@include('user.layouts.navbar')

{{-- {{-- <div class="pic top center"><img src="{{ asset('templateuser') }}/assets/img/about.jpg" class="img-fluid"
        alt=""></div> --}}

{{-- <div class="card mb-3">
            <img src="{{ asset('templateuser') }}/assets/img/about.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div> --}}

{{-- <section id="about" class="about ">
    <div class="container mt-5">
        <div class="section-title">
            <h2>Tentang</h2>
            <p>Berikut merupakan data penyakit mata</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div
                class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
{{-- </div>

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
                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                        excepturi
                        sint occaecati cupiditate non provident</p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-gift"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p>
                </div>

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-atom"></i></div>
                    <h4 class="title"><a href="">Dine Pad</a></h4>
                    <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit.
                        Sunt aut deserunt minus aut eligendi omnis</p>
                </div>

            </div>
        </div>
    </div>
</section><!-- End About Section --> --}}

<section id="features" class="features">
    <div class="container mt-5">
        <div class="section-title">
            <h2>App Features</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row no-gutters">
            <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                <div class="content d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up">
                            <i class="bx bx-receipt"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Ullamco laboris nisi</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div><div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-images"></i>
                            <h4>Labore consequatur</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div><div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-shield"></i>
                            <h4>Beatae veritatis</h4>
                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                        </div>
                        <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-atom"></i>
                            <h4>Molestiae dolor</h4>
                            <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                        </div>
                        <div class="col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-id-card"></i>
                            <h4>Explicabo consectetur</h4>
                            <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('templateuser') }}/asset/img/details-3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
