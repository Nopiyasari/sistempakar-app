@extends('user.layouts.main')
@include('user.layouts.navbar')

<!-- ======= Info Section ======= -->
<section id="services" class="services">
    <div class="container mt-5">
        @foreach ($questions as $question)
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $question->penyakit }}</h5>
                  <p class="card-text">{{ $question->penyebab }}</p>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</section><!-- End Services Section -->
