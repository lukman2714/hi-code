<?php

namespace App\Models\Bisnis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GudangCabangBisnis extends Model
{
    protected $table = "gudang_cabang_bisnis";
    protected $fillable = ['nama_barang', 'harga_modal', 'harga_jual', 'stok', 'subtotal_modal', 'subtotal_jual', 'berat', 'satuan_id', 'cabang_id', 'gudang'];
}
