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
        Schema::create('product_paket', function (Blueprint $table) {
            $table->id();
            $table->string('kode_paket');
            $table->string('nama_paket');
            $table->integer('kategori_id');
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->string('gambar');
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
        Schema::dropIfExists('product_pakets');
    }
};
