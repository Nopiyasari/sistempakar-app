@extends('admin.dashboard.layouts.main')
@section('container')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Gejala</h6>
                <form action="{{route('gejala.store')}}" method="POST">
                    {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
                    @method('POST')
                    @csrf

                    <div class="mb-3">
                        <label class="font-weight-bold">Kode Gejala</label>
                                <select name="kode_gejala" class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih Kode Gejala--</option>
                                    <option value="g01">G01</option>
                                    <option value="g02">G02</option>
                                    <option value="g03">G03</option>
                                  </select>
                        <!-- error message untuk title -->
                        @error('kode_gejala')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Gejala</label>
                        <input required name="gejala" id="gejala" type="text" class="form-control" placeholder="Masukkan pertanyaan">
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </form>
            </div>
        </div>

@endsection

