@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')
@include('sweetalert::alert')

<div class="main-panel ">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Rule</h4>
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
                        <a href="#">Data Rule</a>
                    </li>
                </ul>
            </div>
            <div class ="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Rule</h4>
                    </div>
                    <div class="d-flex justify-content-start mb-4 mt-4">
                        <a href="{{ route('rule.create') }}" class="btn btn-primary btn-round ml-4"><i
                                class="fa fa-plus mr-2"></i>Tambah
                            rule</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Id</th>
                                        <th scope="col">Penyakit</th>
                                        <th scope="col">Gejala</th>
                                        <th style="text-align: center">AKSI</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center">Id</th>
                                        <th scope="col">Penyakit</th>
                                        <th scope="col">Gejala</th>
                                        <th style="text-align: center">Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @forelse ($rules as $rule)
                                        <tr>
                                            <td style="text-align: center">{{ $loop->index + 1 }}</td>
                                            <td>{{ $rule->penyakit->nama_penyakit }}</td>
                                            <td>{{ $rule->gejala->kd_gejala }}</td>

                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('rule.destroy', $rule->id) }}" method="POST">
                                                    <a href="{{ route('rule.edit', $rule->id) }}"
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
                                            Data rule belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
