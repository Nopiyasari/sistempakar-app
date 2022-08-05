<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use App\Models\Pasien;
use App\Models\Diagnosa;

class DiagnosaController extends Controller
{

    public function index()
    {
        $gejala = Rule::with('gejala')->orderBy('kd_gejala', 'ASC')->get();

        return view('konsultasi.diagnosa', compact('gejala'));
    }
    public function diagnosa(request $request)
    {
        //dd($request->all());
        if($request->gejala == null){
            return redirect()->route('diagnosa.list')->with('warning', 'Anda Belum menentukan gejala, silahkan pilih gejala');
        }
        $diagnosa = $this->knowlage($request->gejala);
        $penyakit = Penyakit::where('kd_penyakit', $diagnosa[0])->first();
        $presentase = $diagnosa[1];
        $gjl   = Rule::with('gejala')->where('kd_penyakit', $penyakit->kd_penyakit)->get();
        $pasien   = Pasien::where('id', session()->get('id'))->first();

        $konsultasi = new Diagnosa;
        $konsultasi->pasien_id          = $pasien->id;
        $konsultasi->kd_penyakit        = $penyakit->kd_penyakit;
        $konsultasi->gejala             = $request->gejala;
        $konsultasi->gejala             = implode(",",$request->gejala);
        $input_gejala = $konsultasi->gejala;
        $array =[

        ];
        foreach ($request->gejala as $gejala) {
            $data  = Gejala::where('kd_gejala',$gejala)->get();
            array_push($array, $data[0]['gejala']);
        }

        $data = implode(",", $array);
        $konsultasi->tanggal_konsultasi = date('Y-m-d H:i:s');
        $konsultasi->save();
        return view('konsultasi.hasil-diagnosa', compact('gjl','penyakit','pasien', 'input_gejala', 'presentase','data'));
    }

    function knowlage($gejala)
    {

         $value = [0,0,0,0,0,0];
         if(in_array("G01", $gejala)){
             $value[0]=1;
             if(in_array("G05", $gejala)){
                 $value[0] +=1;
                 if(in_array("G15", $gejala)){
                     $value[0] +=1;
                 }
             }
         }
         $value[0] = ($value[0]/3) *100;

         if(in_array("G03", $gejala)){
             $value[1]=1;
             if(in_array("G08", $gejala)){
                 $value[1] +=1;
                 if(in_array("G09", $gejala)){
                     $value[1] +=1;
                     if(in_array("G11", $gejala)){
                         $value[1] +=1;
                         if(in_array("G12", $gejala)){
                             $value[1] +=1;
                         }
                     }
                 }
             }
         }
         $value[1] = ($value[1]/6) *100;

         if(in_array("G02", $gejala)){
             $value[2]=1;
             if(in_array("G01", $gejala)){
                 $value[2] +=1;
                 if(in_array("G04", $gejala)){
                     $value[2] +=1;
                     if(in_array("G07", $gejala)){
                         $value[2] +=1;
                     }
                 }
             }
         }
         $value[2] = ($value[2]/4) *100;

         if(in_array("G06", $gejala)){
             $value[3]=1;
             if(in_array("G11", $gejala)){
                 $value[3] +=1;
                 if(in_array("G13", $gejala)){
                     $value[3] +=1;
                     if(in_array("G14", $gejala)){
                         $value[3] +=1;
                     }
                 }
             }
         }
         $value[3] = ($value[3]/4) *100;

         if(in_array("G06", $gejala)){
             $value[4]=1;
             if(in_array("G07", $gejala)){
                 $value[4] +=1;
                 if(in_array("G11", $gejala)){
                     $value[4] +=1;
                     if(in_array("G15", $gejala)){
                         $value[4] +=1;
                         if(in_array("G17", $gejala)){
                             $value[4] +=1;
                         }
                     }
                 }
             }
         }
         $value[4] = ($value[4]/5) *100;

         if(in_array("G16", $gejala)){
             $value[5]=1;
             if(in_array("G17", $gejala)){
                 $value[5] +=1;
             }
         }
         $value[5] = ($value[5]/2) *100;
        //  $data = $role;
        //  asort($data);
        //  foreach($data as $x => $x_value) {
        //          $hasil = $x;
        // }
        // return $hasil;

        //   return $hasil;
        // dd($value[]);

        //  foreach($value as $nilai){
        //      $nilai_array[] = $nilai;
        //  }
        // dd($nilai_array);
        foreach($value as $key => $va) {

             $data[] =  $va;

         }
        $nilai = 0;
        $hasil = 0;
        // dd(max($data));
        // dd($value);
        $panjangData = count($data);
        for($i=0; $i < $panjangData; $i++ ){
            if($value[$i] > $nilai){
                $nilai = $value[$i];
                $hasil = $i + 1;

            }
        }
        return ['P0'. $hasil, $nilai];
     }
    }

