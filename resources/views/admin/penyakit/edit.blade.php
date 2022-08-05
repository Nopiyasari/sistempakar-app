@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Penyakit</h4>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Penyakit</div>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('penyakit.update', $data->id)}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Kode Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  value="{{$data->kd_penyakit}}" name="kd_penyakit"  readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Nama Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"   name="nama_penyakit" value="{{$data->nama_penyakit}}" placeholder="Masukan Nama Penyakit">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Deskripsi<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="Masukan Deskripsi Penyakit">{{$data->deskripsi}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Solusi<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="solusi" class="form-control" cols="30" rows="10" placeholder="Masukkan Solusi">{{$data->solusi}}</textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="submit" class="btn btn-primary" onclick="window.history.back()"> Kembali</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
