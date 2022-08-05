@extends('konsultasi.layouts.main')
{{-- @extends('konsultasi.layouts.navbar') --}}


<body style="background: #37517e">
    <section id="features" class="features">
        <div class="container mt-5">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex justify-content-center">
                        <h4 class="mb-4 fw-bold mt-2">Data Konsultasi</h4>
                    </div>
                            <form class="form-valide" action="{{ route('diagnosa') }}" method="post">
                                {{-- @method('PUT') --}}
                                @csrf

                                <div class="table-responsive mt-2">
                                    <table id="table-diagnosa"
                                        class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="10px">No.</th>
                                                <th>Gejala</th>
                                                <th>Checklist</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($gejala->unique('kd_gejala') as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td width="500px"><span class="css-control-indicator"></span>
                                                        {{ $item->gejala->gejala }}</label></td>
                                                    <td width="100px" class="text-left"> <input type="checkbox"
                                                            class="css-control-input" value="{{ $item->kd_gejala }}"
                                                            name="gejala[]"></td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="12" class="text-center"><i>Belum ada data.</i></td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                    <div class="col-md-12 text-right d-flex justify-content-end">
                                        <button type="submit" class="btn btn-outline-primary">Proses Diagnosa</button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </section>
</body>


