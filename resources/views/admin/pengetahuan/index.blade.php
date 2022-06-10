@extends('admin.dashboard.layouts.main')
@section('container')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

        <body style="background: lightgray">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="mb-4 fw-bold">Recent Salse</h4>
                        <a href="">Show All</a>
                    </div>
                    <div class="d-flex justify-content-start mb-4">
                        <a href="{{ route('pengetahuan.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus me-2"></i>Tambah Pengetahuan</a>
                    </div>
                        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">PENYAKIT</th>
                                <th scope="col">GEJALA</th>
                                <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengetahuan as $pengetahuan)
                                <tr>
                                    <td>{{ $pengetahuan->id }}</td>
                                    <td>{{ $pengetahuan->penyakit }}</td>
                                    <td>{{ $pengetahuan->gejala }}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengetahuan.destroy', $pengetahuan->id) }}" method="POST">
                                            <a href="{{ route('pengetahuan.edit', $pengetahuan->id) }}" class="btn btn-sm btn-success"><i class= "bi bi-pencil-fill me-2"></i>EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class= "bi bi-trash me-2"></i>HAPUS</button>
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

            <script>
                //message with toastr
                @if(session()->has('success'))

                    toastr.success('{{ session('success') }}', 'BERHASIL!');

                @elseif(session()->has('error'))

                    toastr.error('{{ session('error') }}', 'GAGAL!');

                @endif
            </script>
            {{-- <script>
                $(document).ready(function(){
                    $('#tabel-data').DataTable();
                });
            </script> --}}

        </body>
@endsection
