<?php

namespace App\Models\Produksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntiKomponen extends Model
{
    protected $table = "inti_komponen";
    protected $fillable = ['nama_komponen', 'kode_komponen', 'total_modal', 'total_jual', 'cabang_id', 'user_id'];
}
