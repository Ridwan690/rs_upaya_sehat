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
        Schema::table('rawat_inap', function (Blueprint $table) {
            $table->foreignId('dokter_id')->nullable()->after('id_kamar')->constrained('dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rawat_inap', function (Blueprint $table) {
            //
        });
    }
};
