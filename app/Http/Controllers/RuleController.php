<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Rule;

class RuleController extends Controller
{

    public function index()
    {
        $data = Rule::with('penyakit','gejala')->orderBy('kd_penyakit', 'ASC')->get();

        return view('admin.rule.index',['rules'=>$data]);
    }


    public function create()
    {
        $penyakit = Penyakit::orderBy('kd_penyakit', 'ASC')->get();
        $gejala   = Gejala::orderBy('kd_gejala', 'ASC')->get();

        return view('admin.rule.create', compact('penyakit', 'gejala'));
    }

    public function store(Request $request)
    {


        $request->validate([
            'penyakit' => 'required',
            'gejala'    => 'required',

         ]);


        if(!$penyakit = Penyakit::where('id', $request->penyakit)->first()){

            return redirect()->route('rule')->with('warning', 'Data Penyakit tidak ditemukan');
        }

        if(!$gejala = Gejala::where('id', $request->gejala)->first()){

            return redirect()->route('rule')->with('warning', 'Data Gejala tidak ditemukan');
        }

        $data              = new Rule();
        $data->kd_penyakit = $penyakit->kd_penyakit;
        $data->kd_gejala   = $gejala->kd_gejala;
        $data->save();

        return redirect()->route('rule')->with('success','Berhasil menambahkan data');

    }

    public function edit($id)
    {
        if(!$data  = Rule::find($id)){
            return redirect()->route('rule')->with('warning', 'Data tidak ditemukan');
        }

        $penyakit = Penyakit::orderBy('kd_penyakit', 'ASC')->get();
        $gejala   = Gejala::orderBy('kd_gejala', 'ASC')->get();

        return view ('admin.rule.edit' ,compact('data','penyakit','gejala'));
    }

    public function update(Request $request, $id)
    {
        if(!$data  = Rule::find($id)){
            return redirect()->route('rule')->with('warning', 'Data tidak ditemukan');
        }


        $request->validate([
            'penyakit' => 'required',
            'gejala'    => 'required',

         ]);

        if(!$penyakit = Penyakit::where('id', $request->penyakit)->first()){

            return redirect()->route('rule')->with('warning', 'Data Penyakit tidak ditemukan');
        }

        if(!$gejala = Gejala::where('id', $request->gejala)->first()){

            return redirect()->route('rule')->with('warning', 'Data Gejala tidak ditemukan');
        }

        $data              = Rule::findOrFail($id);
        $data->kd_penyakit = $penyakit->kd_penyakit;
        $data->kd_gejala   = $gejala->kd_gejala;
        $data->save();

        return redirect()->route('rule')->with('success','Berhasil mengubah data');
    }

    public function destroy($id)
    {
        if(!$data  = Rule::find($id)){
            return redirect()->route('rule')->with('warning', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('rule')->with('success','Berhasil menghapus data');
    }
}
