<?php

namespace App\Models\Bisnis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = "provinsi";
    protected $fillable = ['id', 'name'];
}
