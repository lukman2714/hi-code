<?php

namespace App\Models\Bisnis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regencies extends Model
{
    protected $table = "regencies";
    protected $fillable = ['id', 'province_id', 'name'];
}
