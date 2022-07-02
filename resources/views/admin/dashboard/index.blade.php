@extends('admin.dashboard.layouts.main')
@section('container')
    <!-- Spinner Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-person-badge fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Pasien</p>
                        <h6 class="mb-0">{{ $pasien }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-person-badge fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Admin</p>
                        <h6 class="mb-0">{{ $admin }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-clipboard-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Penyakit</p>
                        <h6 class="mb-0">{{ $penyakit }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-clipboard-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Gejala</p>
                        <h6 class="mb-0">{{ $gejala }}</h6>
                    </div>
                </div>
            </div>


            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Selamat Datang!</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
    </div>


@endsection
