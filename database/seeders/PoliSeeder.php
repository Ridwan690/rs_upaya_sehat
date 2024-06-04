<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh poli
        $data = [
            ['nama_poli' => 'Poli Umum'],
            ['nama_poli' => 'Poli Gigi'],
            ['nama_poli' => 'Poli Mata'],
            ['nama_poli' => 'Poli Kandungan'],
            ['nama_poli' => 'Poli Saraf'],
            ['nama_poli' => 'Poli Bedah'],
            ['nama_poli' => 'Poli Anak'],
            ['nama_poli' => 'Poli THT'],
            ['nama_poli' => 'Poli Jantung'],
            ['nama_poli' => 'Poli Paru'],
        ];

        // Memasukkan data ke dalam tabel poli
        foreach ($data as $d) {
            \App\Models\Poli::create($d);
        } 
    }
}
