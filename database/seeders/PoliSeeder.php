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
            [
                'kode_poli' => 'PU',
                'nama_poli' => 'Poli Umum'
            ],
            [
                'kode_poli' => 'PG',
                'nama_poli' => 'Poli Gigi'
            ],
            [
                'kode_poli' => 'PM',
                'nama_poli' => 'Poli Mata'
            ],
            [
                'kode_poli' => 'PK',
                'nama_poli' => 'Poli Kandungan'
            ],
            [
                'kode_poli' => 'PS',
                'nama_poli' => 'Poli Saraf'
            ],
            [
                'kode_poli' => 'PB',
                'nama_poli' => 'Poli Bedah'
            ],
            [
                'kode_poli' => 'PA',
                'nama_poli' => 'Poli Anak'
            ],
            [
                'kode_poli' => 'PTHT',
                'nama_poli' => 'Poli Telinga, Hidung, dan Tenggorokan'
            ],
            [
                'kode_poli' => 'PJ',
                'nama_poli' => 'Poli Jantung'
            ],
            [
                'kode_poli' => 'PP',
                'nama_poli' => 'Poli Paru-paru'
            ],
        ];

        // Memasukkan data ke dalam tabel poli
        foreach ($data as $d) {
            \App\Models\Poli::create($d);
        } 
    }
}
