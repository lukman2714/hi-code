<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranHutangCabang extends Model
{
    protected $table = "pembayaran_hutang_cabang";
    protected $fillable = [
        'id',
        'no_peminjaman',
        'nominal',
        'user_id',
        'waktu_pembayaran_cabang'
    ];
}
