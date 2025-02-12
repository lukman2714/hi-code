<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePeminjamanBarang extends Model
{
    protected $table = "invoice_peminjaman_barang";
    protected $fillable = [
        'no_peminjaman',
        'cabang_id',
        'peminjaman_id',
        'tanggal_peminjam',
        'peminjam_id',
        'tanggal_tempo',
        'total_all',
        'terbayar',
        'sisa_bayar',
        'status',
        'user_id',
    ];
}
