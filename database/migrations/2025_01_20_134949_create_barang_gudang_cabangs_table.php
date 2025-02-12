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
        Schema::create('barang_gudang_cabang', function (Blueprint $table) {
            $table->id();
            $table->string('code_barang');
            $table->string(
                'code_master'
            );
            $table->string(
                'nama_barang'
            );
            $table->float('berat', 16);
            $table->integer('satuan_id');
            $table->float('stok', 16);
            $table->float('harga_modal', 16);
            $table->float('harga_jual', 16);
            $table->float(' margin', 16);
            $table->float('subtotal_modal', 16);
            $table->float('subtotal_jual', 16);
            $table->integer('cabang_id');
            $table->integer('gudang_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_gudang_cabangs');
    }
};
