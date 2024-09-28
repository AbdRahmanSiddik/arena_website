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
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detail_pesanan')->autoIncrement();
            $table->string('pesanan_kode');
            $table->unsignedInteger('jumlah_sesi');
            $table->double('total_harga');
            $table->enum('status', ['done', 'canceled', 'pending'])->default('done');
            $table->string('qr_code');
            $table->timestamps();

            $table->foreign('pesanan_kode')->references('kode_pesanan')->on('pesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan');
    }
};
