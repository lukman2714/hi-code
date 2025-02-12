<?php

namespace App\Models\Bisnis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangBisnis extends Model
{
    protected $table = "cabang_bisnis";
    protected $fillable = ["nama_cabang", "alamat", "no_hp", "fungsi"];
}
