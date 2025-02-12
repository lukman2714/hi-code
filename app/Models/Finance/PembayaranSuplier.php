<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranSuplier extends Model
{
    protected $table = "pembayaran_supplier";
    protected $fillable = [
        'id',
        'no_receive',
        'nominal',
        'user_id',
        'waktu_pembayaran_supplier'
    ];
}
