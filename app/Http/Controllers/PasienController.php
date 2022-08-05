<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Pasien;

class PasienController extends Controller
{

    public function index()
    {

        return view('pasien.create');
    }

    public function daftar(request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama_lengkap'     => 'required',
            'umur'     => 'required',
            'jenis_kelamin'  => 'required',
            'alamat'     => 'required',
            'no_hp'      => 'required'

        ]);

        $data                 = new Pasien;
        $data->nama_lengkap   = $request->nama_lengkap;
        $data->umur           = $request->umur;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat         = $request->alamat;
        $data->no_hp          = $request->no_hp;
        $data->save();

        $request->session()->put('id',$data->id);
        $request->session()->put('nama',$data->nama_lengkap);

        return redirect()->route('diagnosa.list')->with('success','Berhasil Registarasi');
    }

}


