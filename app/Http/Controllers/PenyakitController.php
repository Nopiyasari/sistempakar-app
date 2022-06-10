<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyakit = Penyakit::orderBy('id', 'ASC')->get();
        return view('admin.penyakit.index', compact('penyakit'));

    }

    public function infoPenyakit() {
        $info = Penyakit::orderBy('penyakit', 'asc')->get();
        return view('user.infopenyakit', [
            'questions' => $info
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_penyakit' => 'required',
            'penyakit' => 'required',
            'penyebab' => 'required',
            'solusi' => 'required'
        ]);

        Penyakit::create($request->all());

        return redirect()->route('penyakit.index')->with('succes','Penyakit Berhasil di Input');
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
        $penyakit = Penyakit::findOrFail($id);
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate ([
            'kode_penyakit' => 'required',
            'penyakit' => 'required',
            'penyebab' => 'required',
            'solusi' => 'required',
        ]);

        $penyakit->update($request->all());

        return redirect()->route('penyakit.index')->with('succes','Gejala Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        $penyakit->delete();

        if($penyakit){
            //redirect dengan pesan sukses
            return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('penyakit.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
