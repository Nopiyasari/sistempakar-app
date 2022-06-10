@extends('admin.dashboard.layouts.main')
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Penyakit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{route('penyakit.store')}}" method="POST">
                            {{-- CSRF merupakan keamanan yang disediakan laravel  --}}
                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">KODE PENYAKIT</label>
                                <input type="text" class="form-control @error('kode_penyakit') is-invalid @enderror" name="kode_penyakit" value="{{ old('kode_gejala') }}" placeholder="Masukkan Kode Gejala">

                                <!-- error message untuk title -->
                                @error('kode_penyakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENYAKIT</label>
                                <input type="text" class="form-control @error('penyakit') is-invalid @enderror" name="penyakit" value="{{ old('penyakit') }}" placeholder="Masukkan Nama Penyakit">

                                <!-- error message untuk title -->
                                @error('penyakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PENYEBAB</label>
                                <textarea class="form-control @error('penyebab') is-invalid @enderror" name="penyebab" rows="5" placeholder="Masukkan Penyebab">{{ old('penyebab') }}</textarea>

                                <!-- error message untuk gejala -->
                                @error('penyebab')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">SOLUSI</label>
                                <textarea class="form-control @error('solusi') is-invalid @enderror" name="solusi" rows="5" placeholder="Masukkan Solusi">{{ old('penyakit') }}</textarea>

                                <!-- error message untuk gejala -->
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
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>

@endsection
