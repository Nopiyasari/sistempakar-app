@extends('admin.dashboard.layouts.main')
@section('container')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Penyakit</h6>
                <form method="POST" action="{{route('penyakit.update', $penyakit->id)}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="penyakit" value="{{$penyakit->id}}">

                      <div class="mb-3">
                        <label for="" class="form-label">Kode Penyakit</label>
                                    <select name="kode_penyakit" class="form-select" aria-label="Default select example">
                                        <option selected>{{$penyakit->kode_penyakit}}</option>
                                        <option value="P01">P01</option>
                                        <option value="P02">P02</option>
                                        <option value="P03">P03</option>
                                      </select>
                        <label>
                        {{-- <input name="kode_penyakit" value="{{$penyakit->kode_penyakit}}" type="text" class="form-control" placeholder="Masukkan kode penyakit"> --}}
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Gambar</label>
                        <img src="{{ Storage::url('penyakit/') . $penyakit->image }}" class="card-img-top" height="130px">
                        <input name="image" value="{{$penyakit->image}}" type="file" class="form-control">
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Penyakit</label>
                        <input name="penyakit" value="{{$penyakit->penyakit}}" type="text" class="form-control" placeholder="Masukkan masukkan penyebab penyakit">
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Penyebab</label>
                        <input name="penyebab" value="{{$penyakit->penyebab}}" type="text" class="form-control" placeholder="Masukkan masukkan penyebab penyakit">
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Solusi</label>
                        <input name="solusi" value="{{$penyakit->solusi}}" type="text" class="form-control" placeholder="Masukkan solusi penyakit">
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- @extends('admin.dashboard.layouts.main')
@section('container')

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center display-4">
                    Edit Penyakit
                </div>
                <form method="POST" action="{{route('penyakit.update', $penyakit->id)}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="penyakit" value="{{$penyakit->id}}">
                      <div class="mb-3">
                        <label for="" class="form-label">Kode Penyakit</label>
                        <input name="kode_penyakit" value="{{$penyakit->kode_penyakit}}" type="text" class="form-control" placeholder="Masukkan kode penyakit">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Penyakit</label>
                        <input name="penyakit" value="{{$penyakit->penyakit}}" type="text" class="form-control" placeholder="Masukkan nama penyakit">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Penyebab</label>
                        <input name="penyebab" value="{{$penyakit->penyebab}}" type="text" class="form-control" placeholder="Masukkan masukkan penyebab penyakit">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Solusi</label>
                        <input name="solusi" value="{{$penyakit->solusi}}" type="text" class="form-control" placeholder="Masukkan solusi penyakit">
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div> --}}

