<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangGudangMasuk extends Model
{
    protected $table = "barang_gudang_masuk";
    protected $fillable = ['no_receive', 'no_invoice', 'tanggal_diterima', 'tanggal_invoice', 'supplier_id', 'nama_barang', 'berat', 'satuan_id', 'harga', 'quantity', 'subtotal', 'all_total', 'ppn', 'total_all', 'bayar', 'keterangan', 'tanggal_tempo', 'user_id'];
}
