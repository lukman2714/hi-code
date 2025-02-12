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
        Schema::create('piutang_cabang_bisnis', function (Blueprint $table) {
            $table->id();
            $table->string('no_peminjaman');
            $table->integer('peminjam_id');
            $table->integer('barang_id');
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->float('quantity', 16);
            $table->float('subtotal_modal', 16);
            $table->float('subtotal_jual', 16);
            $table->float('cabang_id');
            $table->float('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piutang_cabang_bisnis');
    }
};
