<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RekamMedik;

class RekamMedikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RekamMedik::create([
            'pasien_id' => '1',
            'no_rekam_medik' => 'RM-000001',
        ]);
        RekamMedik::create([
            'pasien_id' => '2',
            'no_rekam_medik' => 'RM-000002',
        ]);
        RekamMedik::create([
            'pasien_id' => '3',
            'no_rekam_medik' => 'RM-000003',
        ]);
    }
}
