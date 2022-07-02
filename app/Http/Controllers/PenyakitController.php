<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $info = Penyakit::orderBy('penyakit', 'asc')->take(4)->get();
        return view('user.infopenyakit', [
            'info' => $info
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
        // $this->validate($request, [

        //     'kode_penyakit' => 'required',
        //     'image'     => 'required|image|mimes:png,jpg,jpeg',
        //     'penyakit' => 'required',
        //     'penyebab' => 'required',
        //     'solusi' => 'required',
        // ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/penyakit', $image->hashName());

        // $penyakit = Penyakit::create([
        //     'kode_penyakit' => $request->kode_penyakit,
        //     'image'     => $image->hashName(),
        //     'penyakit' => $request->penyakit,
        //     'penyebab' => $request->penyebab,
        //     'solusi' => $request->solusi
        // ]);

        // if($penyakit){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // }else{
        //     //redirect dengan pesan error
        //     return redirect()->route('penyakit.index')->with(['error' => 'Data Gagal Disimpan!']);
        // }

    $this->validate($request, [
        'kode_penyakit' => 'required',
        'image'     => 'required|image|mimes:png,jpg,jpeg',
        'penyakit'  => 'required',
        'penyebab'  => 'required',
        'solusi'    => 'required',
    ]);

    //upload image
    $image = $request->file('image');
    $image->storeAs('public/penyakit', $image->hashName());

    $penyakit = Penyakit::create([
        'kode_penyakit' => $request->kode_penyakit,
        'image'     => $image->hashName(),
        'penyakit' => $request->penyakit,
        'penyebab' => $request->penyebab,
        'solusi' => $request->solusi,
    ]);

    if($penyakit){
        //redirect dengan pesan sukses
        return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('penyakit.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
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
        // Storage::disk('local')->delete('public/penyakit/'.$penyakit->image);
        // $image = $request->file('image');
        // $image->storeAs('public/penyakit', $image->hashName());


        // $penyakit->update([
        //     'kode_penyakit' => 'required',
        //     'image'     => $image->hashName(),
        //     'penyakit' => 'required',
        //     'penyebab' => 'required',
        //     'solusi' => 'required',
        // ]);

        // $penyakit->update($request->all());

        // return redirect()->route('penyakit.index')->with('succes','Gejala Berhasil di Update');
        $this->validate($request, [
            'kode_penyakit' => 'required',
            'image'     => 'required',
            'penyakit'  => 'required',
            'penyebab'  => 'required',
            'solusi'    => 'required',
        ]);

        //get data Blog by ID
        $penyakit = Penyakit::findOrFail($penyakit->id);

        if($request->file('image') == "") {

            $penyakit->update([
                'kode_penyakit' => $request->kode_penyakit,
                // 'image'     => $image->image,
                'penyakit' => $request->penyakit,
                'penyebab' => $request->penyebab,
                'solusi' => $request->solusi,
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/penyakit/'.$penyakit->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/penyakit', $image->hashName());

            $penyakit->update([
                'kode_penyakit' => $request->kode_penyakit,
                'image'     => $image->hashName(),
                'penyakit' => $request->penyakit,
                'penyebab' => $request->penyebab,
                'solusi' => $request->solusi,
            ]);

        }

        if($penyakit){
            //redirect dengan pesan sukses
            return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('penyakit.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
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
