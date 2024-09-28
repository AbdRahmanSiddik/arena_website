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
        Schema::create('arena', function (Blueprint $table) {
            $table->unsignedBigInteger('id_arena')->autoIncrement();
            $table->string('token_arena');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('mitra_id');
            $table->string('nama_arena');
            $table->string('foto_arena');
            $table->double('tarif');
            $table->text('deskripsi');
            $table->enum('status', ['rented', 'unrented'])->default('unrented');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id_kategori')->on('kategori')->onDelete('cascade');
            $table->foreign('mitra_id')->references('id_mitra')->on('mitra')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arena');
    }
};
