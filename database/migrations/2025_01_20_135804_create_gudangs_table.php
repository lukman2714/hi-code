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
        Schema::create('gudang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->float('stok', 16);
            $table->float('subtotal_modal', 16);
            $table->float('subtotal_jual', 16);
            $table->float('berat', 16);
            $table->integer('satuan_id');
            $table->integer('cabang_id');
            $table->integer('gudang_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudangs');
    }
};
