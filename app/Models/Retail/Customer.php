<?php

namespace App\Models\Retail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $fillable = ['kode_customer', 'no_ktp', 'npwp', 'nama', 'toko', 'no_hp', 'alamat', 'kode_sale', 'pict_ktp', 'kab_id', 'kec_id', 'kel_id'];
}
