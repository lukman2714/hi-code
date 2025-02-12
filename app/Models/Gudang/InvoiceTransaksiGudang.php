<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceTransaksiGudang extends Model
{
    protected $table = "invoice_transaksi_gudang";
    protected $fillable = [
        'no_invoice',
        'barang_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'diskon',
        'potongan_harga',
        'subtotal_modal',
        'subtotal_jual',
        'cabang_id',
        'user_id',
    ];
}
