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
        Schema::create('potongan_harga', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id');
            $table->float('range1', 16);
            $table->float('range2', 16);
            $table->float('potongan', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potongan_hargas');
    }
};
