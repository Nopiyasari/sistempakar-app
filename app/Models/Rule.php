<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rule extends Model
{

    protected $table = 'tb_rule';

    protected $fillable =[
        'kd_penyakit',
        'kd_gejala',
        'created_at',
        'updated_at'

    ];

    public function gejala()
    {
        return $this->belongsTo('App\Models\Gejala', 'kd_gejala', 'kd_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo('App\Models\Penyakit', 'kd_penyakit', 'kd_penyakit');
    }
}
