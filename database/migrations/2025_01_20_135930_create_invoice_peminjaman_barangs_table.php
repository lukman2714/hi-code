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
        Schema::create('invoice_peminjaman_barang', function (Blueprint $table) {
            $table->id();
            $table->string('no_peminjaman');
            $table->integer('cabang_id');
            $table->integer('peminjaman_id');
            $table->date('tanggal_peminjam');
            $table->integer('peminjam_id');
            $table->date('tanggal_tempo');
            $table->float('total_all', 16);
            $table->float('terbayar', 16);
            $table->float('sisa_bayar', 16);
            $table->integer('status');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_peminjaman_barangs');
    }
};
