@extends('user.layouts.main')
@include('user.layouts.navbar')

<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              <h2>Konsultasi</h2>
            </div>

            @foreach ($questions as $question)
            <div class="card-body">
              <p class="card-text">{{ $question->gejala }}</p>
              <a href="{{ $questions->links() }}" class="btn btn-primary">Ya</a>
              <a href="#" class="btn btn-primary">tidak</a>
            </div>
            @endforeach
            <br/>
            Pertanyaan : {{ $questions->currentPage() }} <br>
            Total Pertanyaan : {{ $questions->total() }} <br>
            <br/>
        </div>
        {{-- {{ $questions->links() }} --}}

    </div>
</section>
<!-- End Appointment Section -->

