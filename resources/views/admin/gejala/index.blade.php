@extends('admin.dashboard.layouts.main')
@section('container')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Data Gejala</h6>
                    <table class="table table-bordered">
                        <div class="card-body">
                            <a href="{{ route('gejala.create') }}" class="btn btn-md btn-primary"><i
                                    class="fa fa-plus me-2"></i>Tambah gejala</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">KODE GEJALA</th>
                                        <th scope="col">GEJALA</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($gejala as $gejala)
                                        <tr>
                                            <td>{{ $gejala->id }}</td>
                                            <td>{{ $gejala->kode_gejala }}</td>
                                            <td>{{ $gejala->gejala }}</td>

                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('gejala.destroy', $gejala->id) }}" method="POST">
                                                    <a href="{{ route('gejala.edit', $gejala->id) }}"
                                                        class="btn btn-sm btn-warning"><i
                                                            class="bi bi-pencil-fill me-2"></i>EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-success"><i
                                                            class="bi bi-trash me-2"></i>HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data gejala belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </table>
                </div>
            </div>

            {{-- </div>
                    </div> --}}
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

    {{-- </div>
</div> --}}
    <!-- Recent Sales End -->
@endsection
