<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komposisi', function (Blueprint $table) {
            $table->id();
            $table->integer('resep_id');
            $table->integer('bahanbaku_id');
            $table->float('harga_jual', 16);
            $table->float('quantity', 16);
            $table->float('total_harga_jual', 16);
            $table->float('hasil_jadi', 16);
            $table->float('gramasi', 16);
            $table->integer('satuan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komposisis');
    }
};
