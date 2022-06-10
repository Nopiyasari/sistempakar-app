@extends('admin.dashboard.layouts.main')
@section('container')

        <body style="background: lightgray">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <h6 class="mb-4">Penyakit</h6>
                            <div class="card-body">
                                <a href="{{ route('penyakit.create') }}" class="btn btn-md btn-primary mb-3"><i class="fa fa-plus me-2"></i>Tambah penyakit</a>
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">KODE PENYAKIT</th>
                                        <th scope="col">PENYAKIT</th>
                                        <th scope="col">PENYEBAB</th>
                                        <th scope="col">SOLUSI</th>
                                        <th scope="col">AKSI</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($penyakit as $penyakit)
                                        <tr>
                                            <td>{{ $penyakit->id }}</td>
                                            <td>{{ $penyakit->kode_penyakit }}</td>
                                            <td>{{ $penyakit->penyakit }}</td>
                                            <td>{{ $penyakit->penyebab }}</td>
                                            <td>{{ $penyakit->solusi }}</td>

                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penyakit.destroy', $penyakit->id) }}" method="POST">
                                                    <a href="{{ route('penyakit.edit', $penyakit->id) }}" class="btn btn-sm btn-success"><i class= "bi bi-pencil-fill me-2"></i>EDIT</a>
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
        </body>
@endsection
