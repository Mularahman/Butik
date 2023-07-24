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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();

            $table->integer('transaction_id');
            $table->integer('produk_id');
            $table->integer('harga');
            $table->integer('qty');
            $table->string('status'); // PENDING/SHIPPING/SUCCESS
            $table->string('resi')->nullable();
            $table->string('kurir')->nullable();
            $table->text('catatan')->nullable();
            $table->string('kode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
