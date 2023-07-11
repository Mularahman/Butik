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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'member', 'pelanggan'])->nullable()->default('pelanggan');
            $table->enum('jenis_kelamin', ['Laki - laki', 'Perempuan'])->nullable();
            $table->date('tahun')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->text('alamat1')->nullable();
            $table->text('alamat2')->nullable();
            $table->text('negara')->nullable();
            $table->string('provinsi_id')->nullable();
            $table->string('kecamatan_id')->nullable();
            $table->string('kota_id')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama_toko')->nullable();
            $table->integer('kategori_id')->nullable();
            $table->integer('status_toko')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
