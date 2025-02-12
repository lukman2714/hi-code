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
        Schema::create('detail_sales_order', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->integer('cabang_id');
            $table->integer('user_id');
            $table->integer('paket_id');
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->float('quantity', 16);
            $table->float('diskon', 16);
            $table->float('potongan_harga', 16);
            $table->float('subtotal_modal', 16);
            $table->float('subtotal_jual', 16);
            $table->date('tanggal_kirim');
            $table->time('jam_kirim');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sales_orders');
    }
};
