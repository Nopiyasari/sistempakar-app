@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Gejala</h4>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Gejala</div>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('gejala.update', $data->id)}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Kode Gejala<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$data->kd_gejala}}"  name="kd_gejala" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Gejala<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="gejala" class="form-control"  cols="30" rows="5" placeholder="Masukan Gejala">{{$data->gejala}}</textarea>
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
