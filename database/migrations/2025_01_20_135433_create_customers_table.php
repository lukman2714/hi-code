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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('kode_customer');
            $table->integer('no_ktp');
            $table->string('npwp');
            $table->string('nama');
            $table->string('toko');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('kode_sale');
            $table->string('pict_ktp');
            $table->integer('kab_id');
            $table->integer('kec_id');
            $table->integer('kel_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
