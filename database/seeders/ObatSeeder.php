<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data obat asli
        $dataObat = [
            [
                'kode_obat' => 'OBT001',
                'nama_obat' => 'Paracetamol',
                'harga' => 5000,
            ],
            [
                'kode_obat' => 'OBT002',
                'nama_obat' => 'Amoxicillin',
                'harga' => 15000,
            ],
            [
                'kode_obat' => 'OBT003',
                'nama_obat' => 'Ibuprofen',
                'harga' => 10000,
            ],
            [
                'kode_obat' => 'OBT004',
                'nama_obat' => 'Cetirizine',
                'harga' => 7000,
            ],
            [
                'kode_obat' => 'OBT005',
                'nama_obat' => 'Loratadine',
                'harga' => 8000,
            ],
            // Tambahkan data obat lainnya sesuai kebutuhan
        ];

        // Insert data obat ke tabel obat
        foreach ($dataObat as $obat) {
            \App\Models\Obat::create($obat);
        }
    }
}
