@extends('user.layouts.main')
@include('user.layouts.navbar')

<!-- ======= Info Section ======= -->
<section id="info" class="info">
    <div class="container mt-5">
        <div class="section-title">
                <h2>Info</h2>
                <p>Berikut merupakan data penyakit mata</p>
        </div>
        <div class="row g-0">
            @foreach ($info as $infos)
            <div class="card ms-4" style="width: 18rem;">
                <img src="{{ Storage::url('penyakit/') . $infos->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $infos->penyakit }}</h5>
                    <p class="card-text">{{ $infos->penyebab }}</p>
                    {{-- <a href="" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
          @endforeach
        </div>
    </div>
</section>
