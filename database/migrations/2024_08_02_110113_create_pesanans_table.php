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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pesanan')->autoIncrement();
            $table->string('kode_pesanan')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mitra_arena_id');
            $table->enum('status', ['soon', 'playing'])->default('soon');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('mitra_arena_id')->references('id_mitra_arena')->on('mitra_arena')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
