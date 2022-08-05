<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Rule;
use App\Models\Pasien;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function logKonsultasi()
    {
        $data = Diagnosa::with('pasien','penyakit')->orderBy('created_at', 'DESC')->get();

        return view('admin.riwayat_konsultasi.log-konsultasi',compact('data'));
    }

    public function detailLog($id)
    {
        $data     = Diagnosa::where('id', $id)->first();
        $penyakit = Penyakit::where('kd_penyakit', $data[0])->first();
        $presentase = $data[1];
        $gejala   = Rule::with('gejala')->where('kd_penyakit', $data->kd_penyakit)->get();
        $pasien   = Pasien::where('id', $data->pasien_id)->first();

        return view('admin.riwayat_konsultasi.detail', compact('gejala','penyakit','pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatehasil(Request $request, $id)
    {
        $data = Diagnosa::find($id);
        $data->update(['status' => $request->status]);
        return redirect('log-konsultasi')->with('toast_success', 'Data Berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
