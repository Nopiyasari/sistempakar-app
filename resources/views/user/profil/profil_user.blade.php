@extends('konsultasi.layouts.main')

{{-- <body style="background: #37517e">
    <section id="features" class="features">
        <div class="container mt-5">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex justify-content-center">
                        <h4 class="page-title">User Profile</h4>
                        <div class="row">

                        <div class="card-body">
                            <form id="formAccountSettings"
                                action="{{ route('profil_user.update', $user->id) }}"
                                enctype="multipart/form-data" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Name" value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Name" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Level</label>
                                            <input type="text" class="form-control" id="level"
                                                name="level" value="{{ auth()->user()->name }}"
                                                placeholder="Level">
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <button class="btn btn-success">Save</button>
                                        <button class="btn btn-danger">Reset</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>  --}}
<body style="background: #37517e">
<section id="features" class="features">
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ route('profil_user.update', $user->id) }}" enctype="multipart/form-data" method="POST">
                        @method('PUT')
                        @csrf
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Nama Lengkap</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your username" value="{{ auth()->user()->name }}">
                        </div>

                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email address</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (Level)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="level">Level</label>
                                <input class="form-control" id="level" name="level" type="level" placeholder="Enter your phone number" value="{{ auth()->user()->level }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">Simpan Perubahan</button>
                    </form>

                        <div class="row gx-3 mb-3">
                        <div class="card-header mb-4">Ubah Password</div>
                        <form action="{{ route('update-password', $user->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="password_lama">Password Lama</label>
                                    <input type="password" name="old_password" class="form-control"
                                        id="old_password" placeholder="Masukan Password Lama">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="password_baru">Password Baru</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password" placeholder="Masukan Password Baru">
                                    @error('password')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="password_baru">Konfirmasi Password Baru</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="Masukan Password Baru">
                                </div>
                            </div>
                        </div>

                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-md btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
