@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Rule</h4>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Rule</div>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{ route('rule.store') }}" method="post">
                                @csrf
                                <div class="form-group row mt-2">
                                    <label class="col-lg-4 col-form-label" for="val-username">Penyakit<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select name="penyakit" class="form-control" required>
                                            <option value="">Pilih Penyakit</option>
                                            @foreach ($penyakit as $item)
                                                <option value="{{ $item->id }}">{{ $item->kd_penyakit }} -
                                                    {{ $item->nama_penyakit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mt-2">
                                    <label class="col-lg-4 col-form-label" for="val-username">Gejala<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select name="gejala" class="form-control" required>
                                            <option value="">Pilih Gejala</option>
                                            @foreach ($gejala as $item)
                                                <option value="{{ $item->id }}">{{ $item->kd_gejala }} -
                                                    {{ $item->gejala }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-8 ml-auto mt-5">
                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                    <button type="submit" class="btn btn-primary" onclick="window.history.back()">
                                        Kembali</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




