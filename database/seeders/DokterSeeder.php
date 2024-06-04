<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokters = [
            [
                'nama' => 'Dr. Yohanes Wambai',
                'spesialis' => 'Spesialis Jantung',
            ],
            [
                'nama' => 'Dr. Maria Kaipu',
                'spesialis' => 'Spesialis Umum',
            ],
            [
                'nama' => 'Dr. Lukas Yeri',
                'spesialis' => 'Spesialis Bedah',
            ],
            [
                'nama' => 'Dr. Fransiscus Mabo',
                'spesialis' => 'Spesialis Mata',
            ],
            [
                'nama' => 'Dr. Kristina Wanimbo',
                'spesialis' => 'Spesialis THT',
            ],
            [
                'nama' => 'Dr. Agustinus Wayandop',
                'spesialis' => 'Spesialis Anak',
            ],
            [
                'nama' => 'Dr. Regina Elop',
                'spesialis' => 'Spesialis Kebidanan dan Kandungan',
            ],
            [
                'nama' => 'Dr. Yuliana Mandobouw',
                'spesialis' => 'Spesialis Gigi',
            ],
            [
                'nama' => 'Dr. Stefanus Wospak',
                'spesialis' => 'Spesialis Paru',
            ],
            [
                'nama' => 'Dr. Veronica Matuan',
                'spesialis' => 'Spesialis Saraf',
            ],
        ];

        foreach ($dokters as $dokter) {
            \App\Models\Dokter::create($dokter);
        } 
    }
}
