<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekOut extends Model
{
    protected $table = "cek_out";
    protected $fillable = ['no_invoice', 'paket_id', 'quantity', 'harga_modal', 'harga_jual', 'diskon', 'potongan_harga', 'subtotal_modal', 'subtotal_jual', 'cabang_id', 'user_id'];
}
