@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

@include('sweetalert::alert')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Penyakit</h4>
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
                        <a href="#">Data Penyakit</a>
                    </li>
                </ul>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Penyakit</h4>
                    </div>
                    <div class="d-flex justify-content-start mb-4 mt-4 ">
                        <a href="{{ route('penyakit.create') }}" class="btn btn-primary btn-round ml-4"><i
                                class="fa fa-plus mr-2"></i>Tambah Penyakit</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Id</th>
                                        <th scope="col">Kode_Penyakit</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Penyakit</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Solusi</th>
                                        <th style="text-align: center">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center">Id</th>
                                        <th scope="col">Kode Penyakit</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Penyakit</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Solusi</th>
                                        <th style="text-align: center">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td style="text-align: center">{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->kd_penyakit }}</td>
                                            <td><img src="{{ Storage::url('penyakit/') . $item->image }}"
                                                    class="card-img-top" height="130px"></td>
                                            <td>{{ $item->nama_penyakit }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->solusi }}</td>

                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('penyakit.destroy', $item->id) }}" method="POST">
                                                    <a href="{{ route('penyakit.edit', $item->id) }}"
                                                        class="btn btn-sm btn-success"><i
                                                            class="fa fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fa fa-times"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data penyakit belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
