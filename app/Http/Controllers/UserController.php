<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;

class UserController extends Controller
{


    public function home()
    {
        return view('user.home');
    }
    public function infoPenyakit()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('user.infopenyakit', compact('data'));
    }

    // public function konsultasi()
    // {
    //     return view('user.konsultasi.create');
    // }



    public function kontak()
    {
        return view('user.kontak');
    }


    public function tentang()
    {
        return view('user.tentang');
    }
}
