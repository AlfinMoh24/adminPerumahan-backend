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
        Schema::create('penghuni', function (Blueprint $table) {
            $table->id();
            $table->string("nama_lengkap");
            $table->string('foto_ktp');
            $table->string('nomor_telepon');
            $table->enum('status_perkawinan', ['Menikah', 'Belum Menikah'])->default('Belum Menikah');
            $table->enum('status_penghuni',['Tetap','Kontrak'])->default('Tetap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghuni');
    }
};
