<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceReturnSupplier extends Model
{
    protected $table = "invoice_return_supplier";
    protected $fillable = [
        'no_return',
        'no_invoice',
        'tanggal_return',
        'tanggal_invoice',
        'supplier_id',
        'subtotal',
        'pajak',
        'total_all',
        'status_return'
    ];
}
