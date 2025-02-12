<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahanbaku extends Model
{
    protected $table = "bahanbaku";
    protected $fillable = ['nama_bahanbaku', 'harga_modal', 'harga_jual', 'berat', 'satuan_id'];
}
