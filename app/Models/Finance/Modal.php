<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    protected $table = "modal";
    protected $fillable = ['nama_modal', 'nominal'];
}
