<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "item";
    protected $fillable = ['kode_item', 'nama_item', 'resep_id', 'kategori_id', 'harga_modal', 'harga_jual', 'gambar', 'cabang_id', 'user_id'];
}
