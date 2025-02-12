<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = "purchasing_models";
    protected $fillable = [
        'no_purchase',
        'cabang_awal',
        'cabang_tujuan',
        'user_awal',
        'tanggal_purchase',
        'gudang_id',
        'tanggal_tempo',
        'total_all',
        'terbayar',
        'sisa_bayar',
        'status'
    ];
}
