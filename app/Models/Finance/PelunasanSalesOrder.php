<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelunasanSalesOrder extends Model
{
    protected $table = "pelunasan_sales_order";
    protected $fillable = [
        'id',
        'no_invoice',
        'nominal',
        'tanggal_masuk',
        'cabang_id',
        'user_id',
        'waktu_pelunasan'
    ];
}
