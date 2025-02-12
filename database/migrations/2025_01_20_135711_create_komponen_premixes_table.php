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
        Schema::create('komponen_premix', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->integer('barang_id');
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->integer('satuan_id');
            $table->integer('cabang_id');
            $table->float('subtotal_modal', 16);
            $table->float('subtotal_jual', 16);
            $table->integer('user_id');
            $table->integer('gudang_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komponen_premixes');
    }
};
