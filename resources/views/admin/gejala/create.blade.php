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
                        <!-- error message untuk title -->
                        @error('kode_gejala')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Gejala</label>
                        <input required name="gejala" id="gejala" type="text" class="form-control" placeholder="Masukan Gejala">

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

@endsection

