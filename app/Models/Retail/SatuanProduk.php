<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanProduk extends Model
{
    protected $table = "satuan_produk";
    protected $fillable = ["nama_satuan"];
}
