<?php

namespace App\Models\Bisnis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = "village";
    protected $fillable = ['id', 'kec_id', 'name'];
}
