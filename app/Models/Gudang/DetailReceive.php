<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReceive extends Model
{
    protected $table = "detail_receive";
    protected $fillable = [
        'id',
        'no_receive',
        'no_invoice',
        'barang_id',
        'satuan_id',
        'quantity',
        'harga',
        'sub_total',
        'status',
        'user_id'
    ];
}
