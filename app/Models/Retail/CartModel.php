<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    protected $table = "cart_model";
    protected $fillable = ['paket_id', 'quantity', 'harga_modal', 'harga_jual', 'diskon', 'potongan_harga', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'user_id'];
}
