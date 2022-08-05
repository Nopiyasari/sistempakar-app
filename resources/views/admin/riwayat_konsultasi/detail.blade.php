@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Penyakit</h4>
                    </div>
                        <table class="table table-striped ml-2">
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
                        </table>
                        <hr>
                        <div class="container">
                            <h3 class="font-weight-bold mb-3">Keterangan </h3>
                            <h5>Deskripsi : </h5>
                            <p>{{$penyakit->deskripsi}}</p>
                            <h5>Gejala : </h5>
                            <p>
                                <div class="bootstrap-label">
                                    @foreach ($gejala as $item)

                                    <span class="label label-pink"> {{$item->gejala->gejala}}</span>
                                    @endforeach
                                </div>
                            </p>
                         <h5>Pengobatan/Solusi : </h5>
                            <p>
                                <textarea readonly cols="120" rows="10">  {{$penyakit->solusi}}</textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>




