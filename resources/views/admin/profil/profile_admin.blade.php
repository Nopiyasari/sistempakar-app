@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <h4 class="page-title">User Profile</h4>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-header">
                            <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="profil_admin" role="tab" aria-selected="false">Profile</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="setting" role="tab" aria-selected="false">Settings</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="formAccountSettings" action="{{ route('profil.update', $user->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @method('PUT')
                                @csrf
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Name" value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Level</label>
                                                <input type="text" class="form-control" id="level" name="level" value="{{ auth()->user()->name }}" placeholder="Level">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>photo</label>
                                                <img src="{{ Storage::url('profil/') . $user->photo }}"
                                                    class="rounded-circle" width="180px" height="180px">
                                                <input type="hidden" class="form-control-file mt-3" name="photo"
                                                    value="{{ $user->photo }}">
                                                <div class="pt-2">
                                                    <input type="file" name="photo"
                                                        class="btn btn-outline-primary btn-sm">
                                                </div>
                                            </div>


                                        <button class="btn btn-success">Save</button>
                                        <button class="btn btn-danger">Reset</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div>
    </div>
</div> --}}

