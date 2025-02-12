<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBahanBaku extends Model
{
    protected $table = "master_bahan_baku";
    protected $fillable = ['code_master', 'nama_barang', 'berat', 'satuan_id', 'kategori_id', 'harga_modal', 'margin', 'harga_jual', 'stok', 'subtotal_modal', 'subtotal_jual', 'cabang_id'];
}
