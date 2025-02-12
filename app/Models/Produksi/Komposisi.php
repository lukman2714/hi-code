<?php

namespace App\Models\Produksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komposisi extends Model
{
    protected $table = "komposisi";
    protected $fillable = ['resep_id', 'bahanbaku_id', 'harga_jual', 'quantity', 'total_harga_Jual', 'hasil_jadi', 'gramasi', 'satuan_id'];
}
