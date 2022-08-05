@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Admin</h4>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Admin</div>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('data_admin.store')}}" method="post">
                                @csrf
                                <div class="form-group row mt-2">
                                    <label class="col-lg-4 col-form-label" for="name">Nama Lengkap<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name" placeholder="Masukan Nama lengkap">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-lg-4 col-form-label" for="level">Level<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="level" value="admin" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-lg-4 col-form-label" for="val-email">Password<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="password" placeholder="Masukan Password">
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-warning">Simpan</button>
                                        <button type="submit" class="btn btn-primary" onclick="window.history.back()"> Kembali</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



