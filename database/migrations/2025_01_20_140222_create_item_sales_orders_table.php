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
        Schema::create('item_sales_order', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->integer('paket_id');
            $table->integer('cabang_id');
            $table->integer('item_id');
            $table->float('quantity', 16);
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
        Schema::dropIfExists('item_sales_orders');
    }
};
