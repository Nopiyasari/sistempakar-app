{{-- </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
<!-- / Content --> --}}

@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="page-title">User Profile</h4>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB
                                </div>
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
                                    <form id="formAccountSettings" action="{{ route('profil.update', $user->id) }}"enctype="multipart/form-data" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <!-- Form Group (username)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Nama Lengkap</label>
                                            <input class="form-control" id="inputUsername" type="text"
                                                placeholder="Enter your username"
                                                value="{{ auth()->user()->name }}">
                                        </div>

                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                            <input class="form-control" id="inputEmailAddress" type="email"
                                                placeholder="Enter your email address"
                                                value="{{ auth()->user()->email }}">
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3 mb-3">
                                            <!-- Form Group (Level)-->
                                            <div class="col-md-6">
                                                <label class="small mb-1" for="inputLevel">Level</label>
                                                <input class="form-control" id="inputLevel" type="level"
                                                    placeholder="Enter your phone number"
                                                    value="{{ auth()->user()->level }}">
                                            </div>
                                        </div>

                                        <!-- Save changes button-->
                                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

