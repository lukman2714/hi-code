<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePurchaseProduksi extends Model
{
    protected $table = "invoice_purchase_produksi";
    protected $fillable = [
        'no_purchase',
        'user_id',
        'tanggal_purchase',
        'gudang_id',
        'tanggal_tempo',
        'total_all',
        'terbayar',
        'sisa_bayar',
        'status',
    ];
}
