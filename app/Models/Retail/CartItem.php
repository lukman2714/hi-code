<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = "cart_item";
    protected $fillable = ['paket_id', 'cabang_id', 'user_id', 'harga_modal', 'harga_jual', 'subtotal_modal', 'subtotal_jual', 'item_id', 'quantity', 'user_id'];
}
