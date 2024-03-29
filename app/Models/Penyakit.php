<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table= 'penyakit';

    protected $fillable = [
        'image',
        'kd_penyakit',
        'nama_penyakit',
        'deskripsi',
        'solusi',
        'created_at',
        'updated_at'
    ];

}
