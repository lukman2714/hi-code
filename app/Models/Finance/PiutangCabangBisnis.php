<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiutangCabangBisnis extends Model
{
    protected $table = "piutang_cabang";
    protected $fillable = [
        'no_peminjaman',
        'peminjaman_id',
        'barang_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'subtotal_modal',
        'subtotal_jual',
        'cabang_id',
        'peminjam_id'
    ];
}
