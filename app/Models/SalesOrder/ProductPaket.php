<?php

namespace App\Models\SalesOrder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPaket extends Model
{
    protected $table = "produk_paket";
    protected $fillable = ['kode_paket', 'nama_paket', 'kategori_id', 'harga_modal', 'harga_jual', 'gambar', 'cabang_id', 'user_id'];
}
