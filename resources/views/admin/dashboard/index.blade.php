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
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-clipboard-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Penyakit</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-clipboard-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Gejala</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="bi bi-newspaper fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Data Artikel</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
