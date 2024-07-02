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
        Schema::create('percetakan_gelang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rawat_inap_id')->constrained('rawat_inap');
            $table->enum('warna_gelang', [
                'Biru Muda',
                'Merah Muda',
                'Kuning',
                'Merah',
                'Ungu',
            ])->default('Biru Muda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('percetakan_gelang');
    }
};
