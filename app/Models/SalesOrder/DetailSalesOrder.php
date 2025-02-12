<?php

namespace App\Models\SalesOrder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSalesOrder extends Model
{
    protected $table = "detail_sales_order";
    protected $fillable = [
        'no_invoice',
        'cabang_id',
        'user_id',
        'paket_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'diskon',
        'potongan_harga',
        'subtotal_modal',
        'subtotal_jual',
        'tanggal_kirim',
        'jam_kirim',
        'status'
    ];
}
