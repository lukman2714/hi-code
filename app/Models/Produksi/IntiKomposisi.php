<?php

namespace App\Models\Produksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntiKomposisi extends Model
{
    protected $table = "inti_komposisi";
    protected $fillable = ['resep_id', 'modal'];
}
