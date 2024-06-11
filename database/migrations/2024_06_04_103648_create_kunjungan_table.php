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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rekam_medik_id')->constrained('rekammedik');
            $table->foreignId('dokter_id')->constrained('dokter');
            $table->foreignId('poli_id')->constrained('poli');
            $table->timestamp('tanggal')->useCurrent();
            $table->string('diagnosa')->nullable();
            $table->string('tindakan')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
