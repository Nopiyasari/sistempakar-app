<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;


    protected $table = 'diagnosa';

    protected $fillable =[
        'pasien_id',
        'kd_penyakit',
        'gejala',
        'tanggal_konsultasi',
        'created_at',
        'updated_at'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'kd_penyakit', 'id');
    }
}

