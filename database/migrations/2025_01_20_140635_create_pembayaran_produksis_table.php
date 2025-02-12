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
        Schema::create('pembayaran_produksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_purchase');
            $table->float('nominal', 16);
            $table->integer('user_id');
            $table->date('waktu_pembayaran_produksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_produksis');
    }
};
