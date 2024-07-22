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
        RekamMedik::create([
            'pasien_id' => '4',
            'no_rekam_medik' => 'RM-000004',
        ]);
        RekamMedik::create([
            'pasien_id' => '5',
            'no_rekam_medik' => 'RM-000005',
        ]);
        RekamMedik::create([
            'pasien_id' => '6',
            'no_rekam_medik' => 'RM-000006',
        ]);
        RekamMedik::create([
            'pasien_id' => '7',
            'no_rekam_medik' => 'RM-000007',
        ]);
        RekamMedik::create([
            'pasien_id' => '8',
            'no_rekam_medik' => 'RM-000008',
        ]);
        RekamMedik::create([
            'pasien_id' => '9',
            'no_rekam_medik' => 'RM-000009',
        ]);
        RekamMedik::create([
            'pasien_id' => '10',
            'no_rekam_medik' => 'RM-000010',
        ]);
        RekamMedik::create([
            'pasien_id' => '11',
            'no_rekam_medik' => 'RM-000011',
        ]);
        RekamMedik::create([
            'pasien_id' => '12',
            'no_rekam_medik' => 'RM-000012',
        ]);
        RekamMedik::create([
            'pasien_id' => '13',
            'no_rekam_medik' => 'RM-000013',
        ]); 
    }
}
