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
        Schema::create('rawat_inap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kunjungan')->constrained('kunjungan');
            $table->foreignId('id_kamar')->constrained('kamar');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->enum('status', ['Ditangani', 'Belum Ditangani'])->default('Belum Ditangani');
            $table->string('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawat_inap');
    }
};
