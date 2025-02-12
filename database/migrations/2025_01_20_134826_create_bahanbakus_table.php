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
        Schema::create('bahanbaku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bahanbaku');
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->float('berat', 16);
            $table->integer('satuan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahanbakus');
    }
};
