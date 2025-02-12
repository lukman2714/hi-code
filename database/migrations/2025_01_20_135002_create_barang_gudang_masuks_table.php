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
        Schema::create('barang_gudang_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('no_receive');
            $table->string('no_invoice');
            $table->date('tanggal_diterima');
            $table->date('tanggal_invoice');
            $table->integer('supplier_id');
            $table->string('nama_barang');
            $table->float('berat', 16);
            $table->integer('satuan_id');
            $table->float('harga', 16);
            $table->float('quantity', 16);
            $table->float(' subtotal', 16);
            $table->float('all_total', 16);
            $table->float('ppn', 16);
            $table->float('total_all', 16);
            $table->float('bayar', 16);
            $table->text('keterangan');
            $table->date('tanggal_tempo');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_gudang_masuks');
    }
};
