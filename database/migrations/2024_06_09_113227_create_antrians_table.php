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
        Schema::create('antrian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_poli')->constrained('poli');
            $table->foreignId('id_dokter')->constrained('dokter');
            $table->foreignId('id_kunjungan')->nullable()->constrained('kunjungan');
            $table->foreignId('id_rawat_jalan')->nullable()->constrained('rawat_jalan');
            $table->integer('nomor_antrian')->nullable();
            $table->integer('nomor_rawat_jalan')->nullable();
            $table->string('kode_antrian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian');
    }
};
