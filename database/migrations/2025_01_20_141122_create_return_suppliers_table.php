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
        Schema::create('return_suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('no_return');
            $table->string('no_invoice');
            $table->integer('barang_id');
            $table->float('berat', 16);
            $table->integer('satuan_id');
            $table->float('quantity', 16);
            $table->float('harga_satuan', 16);
            $table->float('total_harga', 16);
            $table->integer('status');
            $table->integer('status_return');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_suppliers');
    }
};
