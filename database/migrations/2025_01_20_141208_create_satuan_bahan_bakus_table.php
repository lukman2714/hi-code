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
        Schema::create('satuan_bahan_baku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bahanbaku');
            $table->integer('no');
            $table->integer('nilai_satuan');
            $table->float('harga_modal', 16);
            $table->float('margin', 16);
            $table->float('harga_jual', 16);
            $table->float('stok', 16);
            $table->integer('satuan_id');
            $table->integer('hak_akses');
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
        Schema::dropIfExists('satuan_bahan_bakus');
    }
};
