@extends('user.layouts.main')

<!-- ======= Info Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block text-center">
                  <h1 class="text-capitalize mb-5 text-white">Informasi Penyakit Mata</h1>

                </div>
              </div>
            </div>
        </div>
    </div>
 </section>

<section id="info" class="info">
    <div class="container mt-5">
        <div class="section-title">
                <h2>Info</h2>
                <p>Berikut merupakan data penyakit mata</p>
        </div>
        <div class="row g-0 justify-content-center">
            @foreach ($data as $data)
            <div class="card ms-4 mt-4" style="width: 18rem;">
                <img src="{{ Storage::url('penyakit/') . $data->image }}"
                    class="card-img-top" height="130px">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_penyakit }}</h5>
                    <p class="card-text">{{ $data->deskripsi }}</p>
                    {{-- <a href="" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
          @endforeach
        </div>
    </div>
</section>
