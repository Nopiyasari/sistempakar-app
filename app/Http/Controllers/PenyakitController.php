<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Storage;

class PenyakitController extends Controller
{
    public function index()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();


        return view('admin.penyakit.index', compact('data'));
    }

    public function create()
    {
        $kode = Penyakit::select('kd_penyakit')->orderBy('kd_penyakit', 'desc')->first();

        if ($kode != null) {
            $pecah  = explode("P", $kode->kd_penyakit);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "P0".$number;
            }else{
                $kode   = "P".$number;
            }
        }else{
            $kode = "P01";
        }

        return view('admin.penyakit.create', compact('kode'));
    }

    public function store(request $request)
    {

        $this->validate($request, [
              'image'     => 'required|image|mimes:png,jpg,jpeg',
              'kd_penyakit'   => 'required',
              'nama_penyakit' => 'required',
              'deskripsi'     => 'required',
              'solusi'        => 'required',
 		  ]);
        //upload image
         $image = $request->file('image');
         $image->storeAs('public/penyakit', $image->hashName());

        $data                = new Penyakit;
        $data->kd_penyakit   = $request->kd_penyakit;
        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi     = $request->deskripsi;
        $data->solusi        = $request->solusi;
        $data->image         = $image->hashName();
        $data->save();

        return redirect('/penyakit')->with('success','Berhasil menambahkan data');

    }

    public function edit($id)
    {
        if(!$data  = Penyakit::find($id)){
            return redirect()->route('penyakit')->with('warning', 'Data tidak ditemukan');
		}

        return view ('admin.penyakit.edit' ,compact('data'));

    }

    public function update(request $request, $id)
    {

        if(!$data  = Penyakit::find($id)){
            return redirect()->route('penyakit')->with('warning', 'Data tidak ditemukan');
        }

        //hapus old image
        Storage::disk('local')->delete('public/penyakit/'.$id->image);

        //upload new image
        $image = $request->file('image');

        $data                = Penyakit::findOrFail($id);
        $data->kd_penyakit   = $request->kd_penyakit;
        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi     = $request->deskripsi;
        $data->solusi        = $request->solusi;
        // if ($request->image!=null) {
        $data->image         = $image->hashName();
        // }
        $data->save();

        return redirect()->route('penyakit')->with('success','Berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        $data  = Penyakit::findOrFail($id);
        $data->delete();

        return redirect('/penyakit')->with('success','Berhasil menghapus data');
    }
}
