<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengeluranGudang extends Model
{
    protected $table = "pengeluaran_gudang";
    protected $fillable = [
        'no_pengeluaran',
        'guna_id',
        'nama_barang',
        'jumlah',
        'nominal',
        'total_biaya',
        'total_biaya_all',
        'user_id',
        'cabang_id',
        'hak_akses',
        'tanggal_pengeluaran'
    ];
}
