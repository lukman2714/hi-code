<?php

namespace App\Models\Produksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    protected $table = "komponen";
    protected $fillable = ['nama_komponen', 'item_id', 'modal', 'total_modal', 'harga_jual', 'total_harga_jual', 'cabang_id', 'user_id'];
}
