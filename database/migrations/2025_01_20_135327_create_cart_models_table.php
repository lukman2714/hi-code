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
        Schema::create('cart_model', function (Blueprint $table) {
            $table->id();
            $table->integer('paket_id');
            $table->float('quantity', 16);
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->float('diskon', 16);
            $table->float('potongan_harga', 16);
            $table->float('subtotal_modal', 16);
            $table->float('subtotal_jual', 16);
            $table->integer('cabang_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_models');
    }
};
