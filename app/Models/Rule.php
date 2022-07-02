<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $table= 'rule';
    protected $fillable = ['penyakit', 'gejala', 'created_at', 'updated_at'];
}
