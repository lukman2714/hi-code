<?php

namespace App\Models\Produksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomponenPremix extends Model
{
    protected $table = "komponen_premix";
    protected $fillable = ['kode_barang', 'barang_id', 'harga', 'berat', 'satuan_id', 'cabang_id', 'subtotal', 'gudang_id'];
}
