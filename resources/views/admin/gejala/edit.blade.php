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
                            <select name="kode_gejala" class="form-select" aria-label="Default select example">
                                <option selected>--Pilih Kode Gejala--</option>
                                <option value="G001">G001</option>
                                <option value="G002">G002</option>
                                <option value="G003">G003</option>
                                <option value="G004">G004</option>
                                <option value="G005">G005</option>
                                <option value="G006">G006</option>
                                <option value="G007">G007</option>
                                <option value="G008">G008</option>
                                <option value="G009">G009</option>
                                <option value="G010">G010</option>
                                <option value="G011">G011</option>
                                <option value="G012">G012</option>
                                <option value="G013">G013</option>
                                <option value="G014">G014</option>
                                <option value="G015">G015</option>
                                <option value="G016">G016</option>
                                <option value="G017">G017</option>
                            </select>
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
