@extends('admin.dashboard.layouts.main')
@include('admin.dashboard.layouts.navbar')
@include('admin.dashboard.layouts.sidebar')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Riwayat</h4>
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
                        <a href="#">Data Riwayat</a>
                    </li>
                </ul>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Riwayat</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Pasien</th>
                                        <th>Penyakit</th>
                                        <th>Gejala</th>
                                        <th>Tanggal Konsultasi</th>
                                        <th>Aksi</th>
                                        <th>Status</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Pasien</th>
                                        <th>Penyakit</th>
                                        <th>Gejala</th>
                                        <th>Tanggal Konsultasi</th>
                                        <th>Aksi</th>
                                        <th>Status</th>
                                        <th>Catatan</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td>{{$item->pasien->nama_lengkap}}</td>
                                            <td class="text-center">{{$item->kd_penyakit}}</td>
                                            <td class="text-center">{{$item->gejala}}</td>
                                            <td class="text-center">{{date('d/m/Y',strtotime($item->tanggal_konsultasi))}}</td>
                                            <td class="text-center">
                                                <div class="btn-group" discount="group">
                                                    <a href="/log-konsultasi/detail/{{ $item->id }}" class="btn btn-sm btn-warning"> <i class='pe-7s-pen'></i>Detail</a>

                                                </div>
                                            </td>
                                            <td style="text-align: center">
                                                @if ($item->status !=0)
                                                <button disabled = "disabled" class="btn btn-secondary">Konfirmasi</button>
                                                @else
                                                <form style="margin-buttom: 20px" action="/updatehasil/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('post')
                                                    <input type="hidden" value="1" name="status">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square"></i></button>
                                                </form>
                                                <form style="margin-button: 20px" action="/updatehasil/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('post')
                                                    <input type="hidden" value="2" name="status">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                                </form>

                                                @endif
                                            </td>
                                            <td class="text-center">{{$item->catatan}}</td>


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
         </div>



