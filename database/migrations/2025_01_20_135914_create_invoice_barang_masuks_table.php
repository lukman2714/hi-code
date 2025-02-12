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
        Schema::create('invoice_barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('no_receive');
            $table->string('no_invoice');
            $table->date('tanggal_terima');
            $table->date('tanggal_invoice');
            $table->integer('supplier_id');
            $table->date('tanggal_tempo');
            $table->float('subtotal', 16);
            $table->float('pajak', 16);
            $table->float('total_all', 16);
            $table->float('terbayar', 16);
            $table->float('sisa_bayar', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_barang_masuks');
    }
};
