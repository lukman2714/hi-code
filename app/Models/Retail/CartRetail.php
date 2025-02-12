<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartRetail extends Model
{
    protected $table = "cart_retail";
    protected $fillable = ['kode_item', 'jumlah', 'harga_modal', 'margin', 'harga_jual', 'diskon', 'potongan_harga', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'user_id'];
}
