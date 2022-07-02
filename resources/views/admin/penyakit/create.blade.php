@extends('admin.dashboard.layouts.main')
@section('container')

    <body style="background: lightgray">

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah Penyakit</h6>
                        <form action="{{ route('penyakit.store') }}" method="POST" enctype="multipart/form-data">
                            {{-- CSRF merupakan keamanan yang disediakan laravel --}}
                            @method('POST')
                            @csrf

                            <div class="mb-3">
                                <label class="font-weight-bold">Kode Penyakit</label>
                                <select name="kode_penyakit" class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih Kode Penyakit--</option>
                                    <option value="P001">P001</option>
                                    <option value="P002">P002</option>
                                    <option value="P003">P003</option>
                                    <option value="P004">P004</option>
                                    <option value="P005">P005</option>
                                    <option value="P006">P006</option>
                                </select>
                                <!-- error message untuk title -->
                                @error('kode_penyakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="font-weight-bold">Penyakit</label>
                                <select name="penyakit" class="form-select" aria-label="Default select example">
                                    <option selected>--Pilih Penyakit--</option>
                                    <option value="Katarak">Katarak</option>
                                    <option value="Konjungtivitis">Konjungtivitis</option>
                                    <option value="Keratitis">Keratitis</option>
                                    <option value="Pteregium">Pteregium</option>
                                    <option value="Dry Eyes">Dry Eyes</option>
                                    <option value="Hordeolum">Hordeolum</option>

                                </select>
                                <!-- error message untuk title -->
                                @error('penyakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Penyebab</label>
                                <textarea class="form-control @error('penyebab') is-invalid @enderror" name="penyebab" rows="5"
                                    placeholder="Masukkan penyebab penyakit">{{ old('penyebab') }}</textarea>

                                @error('penyebab')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Solusi</label>
                                <textarea class="form-control @error('solusi') is-invalid @enderror" name="solusi" rows="5"
                                    placeholder="Masukkan Solusi">{{ old('solusi') }}</textarea>

                                @error('solusi')
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
    @endsection
