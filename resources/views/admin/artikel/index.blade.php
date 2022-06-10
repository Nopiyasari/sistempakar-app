@extends('admin.dashboard.layouts.main')
@section('container')

<body style="background: lightgray">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    {{-- <a href="">Show All</a> --}}
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <h6 class="mb-4">Artikel</h6>
                            <a href="{{ route('artikel.create') }}" class="btn btn-md btn-primary mb-3"><i class="fa fa-plus me-2"></i>Tambah Artikel</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($artikels as $artikel)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ Storage::url('artikels/').$artikel->image }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $artikel->title }}</td>
                                        <td>{!! $artikel->content !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
                                                <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-sm btn-success"><i class= "fa fa-pencil-square me-2"></i>EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class= "fa fa-trash me-2"></i>HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Artikel belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                                </table>
                                {{ $artikels->links() }}
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

