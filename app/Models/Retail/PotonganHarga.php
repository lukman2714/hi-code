<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotonganHarga extends Model
{
    protected $table = "potongan_hargas";
    protected $fillable = [
        'id',
        'produk_id',
        'range1',
        'range2',
        'potongan'
    ];
}
