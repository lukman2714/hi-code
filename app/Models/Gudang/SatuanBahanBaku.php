<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBahanBaku extends Model
{
    protected $table = "satuan_bahan_baku";
    protected $fillable = ['nama_barang', 'no', 'nilai_satuan', 'harga_modal', 'margin', 'harga_jual', 'stok', 'satuan_id', 'hak_akses', 'cabang_id', 'user_id'];
}
