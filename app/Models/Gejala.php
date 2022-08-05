<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table= 'gejala';
    protected $fillable = [
        'kd_gejala',
        'gejala',
        'created_at',
        'updated_at'
    ];


}
