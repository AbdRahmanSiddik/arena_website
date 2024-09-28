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
        Schema::create('mitra_arena', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mitra_arena')->autoIncrement();
            $table->string('token_mitra_arena');
            $table->unsignedBigInteger('arena_id');
            $table->unsignedInteger('sesi');
            $table->dateTime('tanggal');
            $table->enum('status', ['booked', 'unbooked'])->default('unbooked');
            $table->timestamps();

            $table->foreign('arena_id')->references('id_arena')->on('arena')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra_arena');
    }
};
