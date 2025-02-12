<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfitGudang extends Model
{
    protected $table = "profit_gudang";
    protected $fillable = [
        'no_purchase',
        'purchase_id',
        'bahanbaku_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'subtotal_modal',
        'subtotal_jual',
        'gudang_id',
        'user_id'
    ];
}
