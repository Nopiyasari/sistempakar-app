@extends('user.layouts.main')
@include('user.layouts.navbar')

<section id="about" class="about ">
    <div class="container">

        <div class="section-title">
            <h2>Tentang</h2>
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
</section><!-- End About Section -->
