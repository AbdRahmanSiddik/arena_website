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
        Schema::create('mitra', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mitra')->autoIncrement();
            $table->string('token_mitra');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_mitra');
            $table->string('logo');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->string('hari_libur', 10);
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->dateTime('masa_aktif');
            $table->enum('status', ['aktif', 'tenggang', 'nonaktif'])->default('aktif');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra');
    }
};
