<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPurchase extends Model
{
    protected $table = "detail_purchase";
    protected $fillable = [
        'id',
        'no_purchase',
        'kode_barang',
        'berat',
        'satuan_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'subtotal_modal',
        'subtotal_jual',
        'status',
        'gudang_id',
        'user_id'
    ];
}
