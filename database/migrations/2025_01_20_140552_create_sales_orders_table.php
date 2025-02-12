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
        Schema::create('sales_order', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->string('nama_pelanggan');
            $table->integer('jenis_pelanggan');
            $table->integer('cabang_id');
            $table->integer('user_id');
            $table->date('tanggal_kirim');
            $table->date('tanggal_masuk');
            $table->date('jam_kirim');
            $table->string('no_hp');
            $table->integer('jenis_order');
            $table->integer('kota_id');
            $table->integer('kec_id');
            $table->integer('kel_id');
            $table->text('jalan');
            $table->text('patokan');
            $table->float('total_all', 16);
            $table->float('terbayar', 16);
            $table->float('sisa_bayar', 16);
            $table->integer('status');
            $table->text('alasan');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
