<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnSupplier extends Model
{
    protected $table = "return_supplier";
    protected $fillable = [
        'id',
        'no_return',
        'no_invoice',
        'barang_id',
        'berat',
        'satuan_id',
        'quantity',
        'harga_satuan',
        'total_harga',
        'status',
        'status_return',
        'user_id'
    ];
}
