<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\Gejala;

class KonsultasiController extends Controller
{
    public function create()
    {
        $data_gejala = Gejala::orderBy('kode_gejala', 'asc')->paginate(1);
        return view('user.konsultasi.create', [
            'questions' => $data_gejala
        ]);
    }

    public function store()
    {
        Konsultasi::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'dob' => request('dob'),
            'alamat' => request('alamat')
        ]);

        return redirect()->back();
    }
}
