@extends('Konsultasi.layouts.main')



<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">

    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header">
              <h2>Isi Konsultasi</h2>
            </div>
            @foreach ($questions as $question)
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <p class="card-text text-start" id="question">{{ $question->gejala }}</p>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-success" id="yes">Ya</a>
                        <a href="#" class="btn btn-danger" id="no">tidak</a>
                    </div>
                </div>
              </div>
            @endforeach


        </div>


    </div>
    <script>
        function clickYes(){
            console.log("yes")
            const data = document.getElementById("question").innerHTML = `<?= $questions[0]->gejala; ?>`
        }
        function clickNo(){
            console.log("no")
        }
    </script>

</section>


<!-- End Appointment Section -->

