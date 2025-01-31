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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penghuni');
            $table->enum('jenis_pembayaran', ['Satpam', 'Kebersihan']);
            $table->enum('periode_pembayaran', ['Bulanan', 'Tahunan']);
            $table->decimal('jumlah', 15, 2);
            $table->date('tanggal');
            $table->enum('status_pembayaran', ['Lunas', 'Belum Dibayar']);
            $table->unsignedBigInteger('id_rumah')->nullable();

            $table->foreign('id_penghuni')->references('id')->on('penghuni')->onDelete('cascade');
            $table->foreign('id_rumah')->references('id')->on('rumah')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
