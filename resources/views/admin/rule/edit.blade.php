@extends('admin.dashboard.layouts.main')
@section('container')


<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h4 class="mb-4 text-center">Tambah Pengetahuan</h4>
                        <form action="{{route('pengetahuan.store')}}" method="POST">
                            {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Penyakit</label>
                                <select name="penyakit" class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih Penyakit--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                <!-- error message untuk title -->
                                @error('penyakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Gejala</label>
                                <select name="gejala"class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih Gejala--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                <!-- error message untuk gejala -->
                                @error('gejala')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

