<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangGudangCabang extends Model
{
    protected $table = "barang_gudang_cabangs";
    protected $fillable = ['code_barang', 'nama_barang', 'berat', 'satuan_id', 'stok', 'harga_modal', 'margin', 'harga_jual', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'gudang_id', 'user_id'];
}
