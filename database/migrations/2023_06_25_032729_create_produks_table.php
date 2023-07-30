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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('kategori_id');
            $table->foreignId('subkategori_id');
            $table->foreignId('user_id');
            $table->string('namaproduk');
            $table->string('kodeproduk');
            $table->string('beratproduk');
            $table->string('stokproduk');
            $table->string('ukuranproduk');
            $table->string('warnaproduk');
            $table->string('hargaproduk');
            $table->string('deskripsishort');
            $table->string('deskripsiproduk');
            $table->string('diskon')->nullable();
            $table->tinyInteger('promo')->nullable();
            $table->tinyInteger('produkbaru')->nullable();
            $table->tinyInteger('bestseller')->nullable();
            $table->tinyInteger('barudatang')->nullable();


            $table->string('slug')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subkategori_id')->references('id')->on('subkategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
