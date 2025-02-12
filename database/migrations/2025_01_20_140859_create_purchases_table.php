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
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->string('no_purchase');
            $table->integer('cabang_awal');
            $table->integer('cabang_tujuan');
            $table->integer('user_awal');
            $table->integer('user_tujuan');
            $table->date('tanggal_purchase');
            $table->integer('gudang_id');
            $table->date('tanggal_tempo');
            $table->float('total_all', 16);
            $table->float('terbayar', 16);
            $table->float('sisa_bayar', 16);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
