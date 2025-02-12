<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranProduksi extends Model
{
    protected $table = "pembayaran_produksi";
    protected $fillable = [
        'id',
        'no_purchase',
        'nominal',
        'user_id',
        'waktu_pembayaran_produksi'
    ];
}
