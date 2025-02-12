<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranPurchasing extends Model
{
    protected $table = "pembayaran_purchasing";
    protected $fillable = [
        'id',
        'no_purchase',
        'nominal',
        'user_id',
        'waktu_purchasing'
    ];
}
