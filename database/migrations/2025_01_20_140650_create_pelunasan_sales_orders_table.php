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
        Schema::create('pelunasan_sales_order', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->float('nominal', 16);
            $table->date('tanggak_masuk');
            $table->integer('cabang_id');
            $table->integer('user_id');
            $table->date('waktu_pelunasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelunasan_sales_orders');
    }
};
