<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPengeluaran extends Model
{
    protected $table = "jenis_pengeluran";
    protected $fillable = ['nama_pengeluaran', 'cabang_id', 'hak_akses'];
}
