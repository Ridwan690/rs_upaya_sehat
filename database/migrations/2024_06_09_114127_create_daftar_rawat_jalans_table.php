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
        // Schema::create('rawat_jalan', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('id_kunjungan')->constrained('kunjungan');
        //     $table->timestamp('tanggal')->useCurrent();
        //     $table->integer('kunjungan_count');
        //     $table->string('rincian_perawatan');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_rawat_jalan');
    }
};
