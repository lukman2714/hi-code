<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiGudang extends Model
{
    protected $table = "transaksi_gudang";
    protected $fillable = [
        'id',
        'no_invoice',
        'user_id',
        'barang_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'diskon',
        'potongan_harga',
        'subtotal_modal',
        'subtotal_jual',
        'cabang_id',
        'user_id',
    ];
}
