<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatKeduaSeeder extends Seeder
{
    public function run()
    {
        // Data obat asli
        $dataObat = [
            [
                'kode_obat' => 'OBT006',
                'nama_obat' => 'Ranitidine',
                'harga' => 12000,
            ],
            [
                'kode_obat' => 'OBT007',
                'nama_obat' => 'Omeprazole',
                'harga' => 18000,
            ],
            [
                'kode_obat' => 'OBT008',
                'nama_obat' => 'Metformin',
                'harga' => 13000,
            ],
            [
                'kode_obat' => 'OBT009',
                'nama_obat' => 'Aspirin',
                'harga' => 6000,
            ],
            [
                'kode_obat' => 'OBT010',
                'nama_obat' => 'Simvastatin',
                'harga' => 11000,
            ],
            [
                'kode_obat' => 'OBT011',
                'nama_obat' => 'Clopidogrel',
                'harga' => 22000,
            ],
            [
                'kode_obat' => 'OBT012',
                'nama_obat' => 'Atorvastatin',
                'harga' => 25000,
            ],
            [
                'kode_obat' => 'OBT013',
                'nama_obat' => 'Azithromycin',
                'harga' => 30000,
            ],
            [
                'kode_obat' => 'OBT014',
                'nama_obat' => 'Ciprofloxacin',
                'harga' => 27000,
            ],
            [
                'kode_obat' => 'OBT015',
                'nama_obat' => 'Dexamethasone',
                'harga' => 9000,
            ],
            [
                'kode_obat' => 'OBT016',
                'nama_obat' => 'Prednisone',
                'harga' => 14000,
            ],
            [
                'kode_obat' => 'OBT017',
                'nama_obat' => 'Fluconazole',
                'harga' => 32000,
            ],
            [
                'kode_obat' => 'OBT018',
                'nama_obat' => 'Amlodipine',
                'harga' => 12000,
            ],
            [
                'kode_obat' => 'OBT019',
                'nama_obat' => 'Losartan',
                'harga' => 16000,
            ],
            [
                'kode_obat' => 'OBT020',
                'nama_obat' => 'Hydrochlorothiazide',
                'harga' => 8000,
            ],
        ];

        // Insert data obat ke tabel obat
        foreach ($dataObat as $obat) {
            Obat::create($obat);
        }
    }
}