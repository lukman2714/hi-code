<?php

namespace App\Models\SalesOrder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSalesOrder extends Model
{
    protected $table = "item_sales_order";
    protected $fillable = ['no_invoice', 'paket_id', 'cabang_id', 'item_id', 'quantity', 'status', 'user_id'];
}
