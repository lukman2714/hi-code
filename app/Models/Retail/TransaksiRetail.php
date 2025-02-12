<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiRetail extends Model
{
    protected $table = "transaksi_retail";
    protected $fillable = ['kode_transaksi', 'tanggal_transaksi', 'subtotal_modal', 'subtotal_jual', 'bayar', 'kembali', 'cabang_id', 'user_id'];
}
