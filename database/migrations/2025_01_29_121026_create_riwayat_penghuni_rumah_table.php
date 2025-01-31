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
        Schema::create('riwayat_penghuni_rumah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rumah')->constrained('rumah')->onDelete('cascade');
            $table->foreignId('id_penghuni')->constrained('penghuni')->onDelete('cascade');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable(); // Boleh null jika masih menempati rumah
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_penghuni_rumah');
    }
};
