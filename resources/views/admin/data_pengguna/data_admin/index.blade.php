@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')
@include('sweetalert::alert')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Admin</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="admin">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Data</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Data Admin</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Admin</h4>
                        </div>
                        <div class="d-flex justify-content-start mb-4 mt-4 ">
                            <a href="{{ route('data_admin.create') }}" class="btn btn-primary btn-round ml-4"><i class="fa fa-plus mr-2"></i>Tambah Admin</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="multi-filter-select" class="display table table-striped table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="10px">No.</th>
                                            <th>Nama Lengkap</th>
                                            <th>Level</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th width="10px">No.</th>
                                            <th>Nama Lengkap</th>
                                            <th>Level</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($admin as $item)
                                            <tr>
                                                <td class="text-center">{{$loop->iteration}}</td>
                                                <td>{{$item->name}}</td>
                                                <td class="text-center">{{$item->level}}</td>
                                                <td class="text-center">{{$item->email}}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('data_admin.destroy', $item->id) }}" method="POST">
                                                        <a href="{{ route('data_admin.edit', $item->id) }}"
                                                            class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                                class="fa fa-times"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12" class="text-center"><i>Belum ada data.</i></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
