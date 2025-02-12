<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";
    protected $fillable = ["nama_supplier", "no_hp", "alamat"];
}
