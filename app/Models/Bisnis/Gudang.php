<?php

namespace App\Models\Bisnis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = "gudang";
    protected $fillable = ['nama_barang', 'harga_modal', 'margin', 'harga_jual', 'stok', 'subtotal_modal', 'sub_total_jual', 'berat', 'satuan_id', 'cabang_id', 'gudang'];
}
