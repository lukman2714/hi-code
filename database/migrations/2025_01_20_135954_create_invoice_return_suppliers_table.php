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
        Schema::create('invoice_return_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('no_return');
            $table->string('no_invoice');
            $table->date('tanggal_return');
            $table->date('tanggal_invoice');
            $table->integer('supplier_id');
            $table->float('subtotal', 16);
            $table->float('pajak', 16);
            $table->float('total_all', 16);
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
        Schema::dropIfExists('invoice_return_suppliers');
    }
};
