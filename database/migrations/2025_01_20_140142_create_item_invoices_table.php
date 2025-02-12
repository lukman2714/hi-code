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
        Schema::create('item_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('kode_item');
            $table->integer('item_id');
            $table->float('harga_modal');
            $table->float('margin');
            $table->float('harga_jual');
            $table->float('stok');
            $table->float('subtotal_modal');
            $table->float('subtotal_jual');
            $table->integer('cabang_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_invoices');
    }
};
