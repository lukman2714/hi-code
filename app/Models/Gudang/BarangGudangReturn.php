<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangGudangReturn extends Model
{
    protected $table = "barang_gudang_return";
    protected $fillable = ['no_purchase', 'barang_id', 'quantity', 'status', 'gudang_id', 'user_id'];
}
