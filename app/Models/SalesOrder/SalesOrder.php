<?php

namespace App\Models\SalesOrder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    protected $table = "sales_order";
    protected $fillable = [
        'no_invoice',
        'nama_pelanggan',
        'jenis_pelanggan',
        'cabang_id',
        'user_id',
        'tanggal_kirim',
        'tanggal_masuk',
        'jam_kirim',
        'no_telp',
        'jenis_order',
        'kota_id',
        'kec_id',
        'kelurahan_id',
        'jalan',
        'patokan',
        'total_all',
        'terbayar',
        'sisa_bayar',
        'status',
        'alasan',
        'keterangan'
    ];
}
