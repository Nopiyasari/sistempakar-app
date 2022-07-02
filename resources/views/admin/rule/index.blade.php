@extends('admin.dashboard.layouts.main')
@section('container')

    <body style="background: lightgray">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="mb-4 fw-bold">Aturan</h4>
                </div>
                <div class="d-flex justify-content-start mb-4">
                    <a href="{{ route('rule.create') }}" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Tambah
                        rule</a>
                </div>
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th style="text-align: center">ID</th>
                            <th scope="col">PENYAKIT</th>
                            <th scope="col">GEJALA</th>
                            <th style="text-align: center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rule as $rule)
                            <tr>
                                <td style="text-align: center">{{ $loop->index+ 1 }}</td>
                                <td>{{ $rule->penyakit }}</td>
                                <td>{{ $rule->gejala }}</td>

                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('rule.destroy', $rule->id) }}" method="POST">
                                        <a href="{{ route('rule.edit', $rule->id) }}" class="btn btn-sm btn-success"><i
                                                class="bi bi-pencil-fill"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="bi bi-trash"></i></button>
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


        <script>
            //message with toastr
            @if (session()->has('success'))

                toastr.success('{{ session('success') }}', 'BERHASIL!');
            @elseif (session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!');
            @endif
        </script>

    </body>
@endsection
