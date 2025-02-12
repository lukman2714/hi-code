<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanBahanBaku extends Model
{
    protected $table = "peminjaman_bahan_baku";
    protected $fillable = [
        'id',
        'no_peminjaman',
        'barang_id',
        'berat',
        'satuan_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'subtotal_modal',
        'subtotal_jual',
        'status',
        'cabang_id',
        'user_id',
        'peminjam_id'
    ];
}
