<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceBarangMasuk extends Model
{
    protected $table = "invoice_barang_masuk";
    protected $fillable = [
        'no_receive',
        'no_invoice',
        'tanggal_diterima',
        'tanggal_invoice',
        'supplier_id',
        'tanggal_tempo',
        'subtotal',
        'pajak',
        'total_all',
        'terbayar',
        'sisa_bayar'
    ];
}
