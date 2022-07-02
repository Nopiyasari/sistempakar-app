@extends('admin.dashboard.layouts.main')
@section('container')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Gejala</h6>
                    <form action="{{ route('rule.store') }}" method="POST">
                        {{-- CSRF merupakan keamanan yang disediakan laravel --}}
                        @method('POST')
                        @csrf

                        <div class="mb-3">
                            <label class="font-weight-bold">Penyakit</label>
                            <select name="penyakit" class="form-select" aria-label="Default select example">
                                <option selected>--Pilih Penyakit--</option>
                                <option value="P01-Katarak">P01 - Katarak</option>
                                <option value="P02-Konjungtivitis">P02 - Konjungtivitis</option>
                                <option value="P03-Keratitis">P03 - Keratitis</option>
                                <option value="P04-Pteregium">P04 - Pteregium</option>
                                <option value="P05-Dry Eyes">P05 - Dry Eyes</option>
                                <option value="P06-Hordeolum">P06 - Hordeolum</option>
                            </select>
                            <!-- error message untuk title -->
                            @error('penyakit')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Gejala yang dipilih</label><br />
                            <select name="gejala" class="form-select" aria-label="Default select example">
                                <option selected>--Pilih Gejala--</option>
                                <option value="G001-Penglihatan kabur perlahan">G001 - Penglihatan kabur perlahan</option>
                                <option value="G002-Silau">G002 - Silau</option>
                                <option value="G003-Mata Merah">G003 - Mata Merah</option>
                                <option value="G004-Nyeri">G004 - Nyeri</option>
                                <option value="G005-Penglihatan berkabut(berasap)">G005 - Penglihatan berkabut(berasap)
                                </option>
                                <option value="G006-Gatal">G006 - Gatal</option>
                                <option value="G007-Berair">G007 - Berair</option>
                                <option value="G008-Belekan">G008 - Belekan</option>
                                <option value="G009-Kelopak bengkak">G009 - Kelopak bengkak</option>
                                <option value="G010-Terasa panas">G010 - Terasa panas</option>
                                <option value="G011-Mengganjal">G011 - Mengganjal</option>
                                <option value="G012-Lengket">G012-Lengket</option>
                                <option value="G013-Merah jika terkena matahari">G013-Merah jika terkena matahari</option>
                                <option value="G014-Tumbuh selaput pada mata">G014-Tumbuh selaput pada mata</option>
                                <option value="G015-Usia diatas 50 tahun">G015-Usia diatas 50 tahun</option>
                                <option value="G016-Kelopak mata tumbuh benjolan">G016-Kelopak mata tumbuh benjolan
                                </option>
                                <option value="G017-Perih">G017-Perih</option>
                            </select>

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
