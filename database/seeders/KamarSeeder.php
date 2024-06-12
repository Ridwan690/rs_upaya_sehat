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
            'harga' => 500000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR002',
            'tipe_kamar' => 'Kelas 1',
            'harga' => 300000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR003',
            'tipe_kamar' => 'Kelas 2',
            'harga' => 200000.00,
        ]);

        Kamar::create([
            'kode_kamar' => 'KMR004',
            'tipe_kamar' => 'Kelas 3',
            'harga' => 100000.00,
        ]);
    }
}
