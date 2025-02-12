<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokRetail extends Model
{
    protected $table = "stok_retail";
    protected $fillable = ['produk_id', 'harga_modal', 'harga_jual', 'stok', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'user_id'];
}
