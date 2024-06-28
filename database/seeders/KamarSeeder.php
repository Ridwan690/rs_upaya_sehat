<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kamar;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambahkan data kamar sampel
        Kamar::create([
            'kode_kamar' => 'KMR001',
            'tipe_kamar' => 'VIP',
            'kapasitas' => 1,
            'harga' => 300000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR002',
            'tipe_kamar' => 'Kelas 1',
            'kapasitas' => 2,
            'harga' => 200000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR003',
            'tipe_kamar' => 'Kelas 2',
            'kapasitas' => 4,
            'harga' => 150000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR004',
            'tipe_kamar' => 'Kelas 3',
            'kapasitas' => 6,
            'harga' => 100000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR005',
            'tipe_kamar' => 'VIP',
            'kapasitas' => 1,
            'harga' => 300000.00,
        ]);
    }
}
