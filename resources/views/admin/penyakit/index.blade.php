@extends('admin.dashboard.layouts.main')
@section('container')

    <body style="background: lightgray">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-4 fw-bold">Penyakit</h4>
                </div>
                <div class="d-flex justify-content-start mb-4">
                    <a href="{{ route('penyakit.create') }}" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Tambah Penyakit</a>
                </div>
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th style="text-align: center">ID</th>
                            <th scope="col">KODE PENYAKIT</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">PENYAKIT</th>
                            <th scope="col">PENYEBAB</th>
                            <th scope="col">SOLUSI</th>
                            <th style="text-align: center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($penyakit as $penyakit)
                            <tr>
                                <td style="text-align: center">{{ $loop->index+ 1 }}</td>
                                <td>{{ $penyakit->kode_penyakit }}</td>
                                <td><img src="{{ Storage::url('penyakit/') . $penyakit->image }}" class="card-img-top" height="130px"></td>
                                <td>{{ $penyakit->penyakit }}</td>
                                <td>{{ $penyakit->penyebab }}</td>
                                <td>{{ $penyakit->solusi }}</td>

                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('penyakit.destroy', $penyakit->id) }}" method="POST">
                                        <a href="{{ route('penyakit.edit', $penyakit->id) }}"
                                            class="btn btn-sm btn-success"><i class="bi bi-pencil-fill"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="bi bi-trash"></i></button>
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

        <script>
            //message with toastr
            @if (session()->has('success'))

                toastr.success('{{ session('success') }}', 'BERHASIL!');
            @elseif(session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!');
            @endif
        </script>
    </body>
@endsection
