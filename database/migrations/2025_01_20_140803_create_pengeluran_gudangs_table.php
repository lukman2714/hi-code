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
        Schema::create('pengeluran_gudang', function (Blueprint $table) {
            $table->id();
            $table->string('no_pengeluaran');
            $table->integer('guna_id');
            $table->string('nama_barang');
            $table->float('jumlah', 16);
            $table->float('nominal', 16);
            $table->float('total_biaya', 16);
            $table->float('total_biaya_all', 16);
            $table->integer('user_id');
            $table->integer('cabang_id');
            $table->integer('hak_akses');
            $table->date('tanggal_pengeluaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluran_gudangs');
    }
};
