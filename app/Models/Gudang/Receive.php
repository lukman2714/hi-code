<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receive extends Model
{
    protected $table = "receive";
    protected $fillable = ['no_receive', 'no_invoices', 'tanggal_terima', 'tanggal_invoices', 'supplier_id', 'total_all', 'ppn', 'all_total', 'terbayar', 'sisa_bayar', 'keterangan', 'tanggal_tempo', 'user_id'];
}
