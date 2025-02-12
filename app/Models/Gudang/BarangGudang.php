<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangGudang extends Model
{
    protected $table = "barang_gudang";
    protected $fillable = ['code_barang', 'code_master', 'nama_barang', 'berat', 'satuan_id', 'stok', 'harga_modal', 'margin', 'harga_jual', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'gudang_id', 'user_id'];
}
