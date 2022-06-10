@extends('admin.dashboard.layouts.main')
@section('container')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Gejala</h6>
                    <form method="POST" action="{{route('gejala.update', $gejala->id)}}">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="gejala" value="{{$gejala->id}}">
                        <div class="mb-3">
                            <label class="font-weight-bold">Kode gejala</label>
                            <input name="kode_gejala" value="{{$gejala->kode_gejala}}" type="text" class="form-control" placeholder="Masukkan kode gejala">
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">Gejala</label>
                            <input name="gejala" value="{{$gejala->gejala}}" type="text" class="form-control" placeholder="Masukkan nama gejala">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
