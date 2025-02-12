<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonusretail extends Model
{
    protected $table = "bonus_retail";
    protected $fillable = ['kode_item', 'item_id', 'harga_modal', 'margin', 'harga_jual', 'quantity', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'user_id', 'tanggal_keluar'];
}
