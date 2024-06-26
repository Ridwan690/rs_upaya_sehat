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
        Schema::create('tarif_rawat_jalan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rawat_jalan_id')->constrained('rawat_jalan')->onDelete('cascade');
            $table->foreignId('tarif_id')->constrained('tarif')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarif_rawat_jalan');
    }
};
