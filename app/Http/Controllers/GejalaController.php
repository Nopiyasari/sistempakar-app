<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use Ramsey\Uuid\Uuid;

class GejalaController extends Controller
{

    public function index()
    {
        $data = Gejala::orderBy('kd_gejala', 'ASC')->get();


        return view('admin.gejala.index', compact('data'));
    }


    public function create()
    {
        $kode = Gejala::select('kd_gejala')->orderBy('kd_gejala', 'desc')->first();


        if ($kode != null) {
            $pecah  = explode("G", $kode->kd_gejala);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "G0".$number;
            }else{
                $kode   = "G".$number;
            }
        }else{
            $kode = "G01";
        }


        return view('admin.gejala.create', compact('kode'));
    }

    public function store(request $request)
    {

        $request->validate([
            'kd_gejala' => 'required',
            'gejala'    => 'required',

 		]);

        $data            = new Gejala;
        $data->kd_gejala = $request->kd_gejala;
        $data->gejala    = $request->gejala;
        $data->save();

        return redirect()->route('gejala')->with('success','Berhasil menambahkan data');

    }

    public function edit($id)
    {
        if(!$data  = Gejala::find($id)){
            return redirect()->route('gejala')->with('warning', 'Data tidak ditemukan');
		}

        return view ('admin.gejala.edit', compact('data'));

    }

    public function update(request $request, $id)
    {
        if(!$data  = Gejala::find($id)){
            return redirect()->route('gejala')->with('warning', 'Data tidak ditemukan');
        }


        $request->validate([
            'kd_gejala' => 'required',
            'gejala'    => 'required',

 		]);



        $data            = Gejala::findOrFail($id);
        $data->kd_gejala = $request->kd_gejala;
        $data->gejala    = $request->gejala;
        $data->save();

        return redirect()->route('gejala')->with('success','Berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        $data  = Gejala::findOrFail($id);
        $data->delete();

        return redirect('/gejala')->with('success','Berhasil menghapus data');

    }
}
