<?php

namespace App\Http\Controllers;

use App\Models\Pengetahuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengetahuan = Pengetahuan::orderBy('id', 'ASC')->get();

        return view('admin.pengetahuan.index', (['pengetahuan' => $pengetahuan]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengetahuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'penyakit'     => 'required',
            'gejala'     => 'required',

        ]);


        Pengetahuan::create($validateData);

        return redirect()->route('pengetahuan.index')->with('succes','Pengetahuan Berhasil di Input');
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
        $pengetahuan = Pengetahuan::findOrFail($id);
        return view('admin.pengetahuan.edit', compact('pengetahuan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pengetahuan $pengetahuan)
    {
        $request->validate([
            'penyakit'     => 'required',
            'gejala'     => 'required',

        ]);

        $pengetahuan->update($request->all());

        return redirect()->route('pengetahuan.index')->with('succes','Pengetahuan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengetahuan = Pengetahuan::findOrFail($id);
        $pengetahuan->delete();

        if($pengetahuan){
            //redirect dengan pesan sukses
            return redirect()->route('pengetahuan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pengetahuan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
