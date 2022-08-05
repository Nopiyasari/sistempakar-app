@extends('konsultasi.layouts.main')

<body style="background: #37517e">
    <section id="features" class="features">
        <div class="container mt-5">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="alert alert-success">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                    <table class="table table-striped">
                       <tr>
                           <th width="150px">Nama</th>
                           <th width="30px">:</th>
                           <th>{{$pasien->nama_lengkap}}</th>
                       </tr>
                        <tr>
                            <th>Umur </th>
                            <th>:</th>
                            <th>{{$pasien->umur}} tahun</th>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <th>:</th>
                            <th>{{$pasien->jenis_kelamin}}</th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th>{{$pasien->alamat}}</th>
                        </tr>
                        <tr>
                            <th>Nomor Handphone</th>
                            <th>:</th>
                            <th>{{$pasien->no_hp}}</th>
                        </tr>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>:</th>
                            <th> {{$penyakit->nama_penyakit}}</th>
                        </tr>
                        <tr>
                            <th>Presentase</th>
                            <th>:</th>
                            <th> {{$presentase}}</th>
                        </tr>
                        <tr>
                            <th>Gejala yang diinput</th>
                            <th>:</th>
                            <th> {{$data}}</th>
                        </tr>
                   </table>
                   <hr>
                   <h5>Keterangan : </h5>

                   <h6>Deskripsi : </h6>
                    <p>{{$penyakit->deskripsi}}</p>

                    <h6>Gejala : </h6>
                    <p>
                        <div class="bootstrap-label">
                            @foreach ($gjl as $item)

                               <span class="label label-pink"> {{$item->gejala->gejala}}</span>
                            @endforeach
                           </div>
                    </p>
                    <h6>Pengobatan/Solusi : </h6>
                    <p>
                        <textarea readonly cols="100" rows="10"> {{$penyakit->solusi}}</textarea>
                    </p>

                </div>
            </div>
        </div>
    </section>
<!-- #/ container -->

