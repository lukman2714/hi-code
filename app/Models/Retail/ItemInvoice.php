<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemInvoice extends Model
{
    protected $table = "item_invoice";
    protected $fillable = ['no_invoice', 'paket_id', 'item_id', 'quantity', 'cabang_id', 'user_id'];
}
