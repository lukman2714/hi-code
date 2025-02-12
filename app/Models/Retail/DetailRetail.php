<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRetail extends Model
{
    protected $table = "detail_retail";
    protected $fillable = ['no_nota', 'tanggal_transaksi', 'kode_item', 'harga_modal', 'margin', 'harga_jual', 'jumlah', 'diskon', 'potongan_harga', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'user_id'];
}
