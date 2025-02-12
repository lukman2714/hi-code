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
        Schema::create('komponen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komponen');
            $table->integer('item_id');
            $table->float('modal', 16);
            $table->float('total_modal', 16);
            $table->float('harga_jual', 16);
            $table->float('total_harga_jual', 16);
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
        Schema::dropIfExists('komponens');
    }
};
