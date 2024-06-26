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
        Schema::create('rawat_jalan_obat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rawat_jalan_id')->constrained('rawat_jalan')->onDelete('cascade');
            $table->foreignId('obat_id')->constrained('obat')->onDelete('cascade');
            $table->string('takaran')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawat_jalan_obat');
    }
};
