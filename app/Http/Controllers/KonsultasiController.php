<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\Gejala;

class KonsultasiController extends Controller
{
    public function create()

    {

        $questions = Gejala::orderBy('kode_gejala', 'ASC')->get();

        return view('Konsultasi.diagnosa', compact('questions'));
    }

    // public function store()
    // {
    //     Konsultasi::create([
    //         'nama' => request('nama'),
    //         'email' => request('email'),
    //         'dob' => request('dob'),
    //         'alamat' => request('alamat')
    //     ]);

    //     return redirect()->back();
    // }
}
