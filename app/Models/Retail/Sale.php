<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = "sale";
    protected $fillable = ['id', 'kode_sales', 'card_id', 'nama_sales', 'no_hp', 'alamat', 'ktp'];
}
