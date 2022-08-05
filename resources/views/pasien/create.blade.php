@extends('konsultasi.layouts.main')

<body style="background: #37517e">
    <section id="features" class="features">
        <div class="container mt-5">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex justify-content-center">
                        <h4 class="mb-4 fw-bold mt-2">Data Konsultasi</h4>
                    </div>
                    <div class="form-validation">
                        <form class="form-valide" action="{{route('pasien.daftar')}}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input  name="nama_lengkap" id="nama_lengkap" type="text" class="form-control"placeholder="Masukan Nama Lengkap">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                                <div class="col-sm-10">
                                    <input  name="umur" id="umur" type="text" class="form-control" placeholder="Masukan Umur">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                            value="Laki-laki">
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                            value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input  name="alamat" id="alamat" type="text" class="form-control" placeholder="Masukan Alamat">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                <div class="col-sm-10">
                                    <input  name="no_hp" id="no_hp" type="number" class="form-control" placeholder="Masukan No. Hp Anda">
                                </div>
                            </div>

                        <button type="submit" class="btn btn-md btn-primary">Konsultasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
