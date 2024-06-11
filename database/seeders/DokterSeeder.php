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
                'id_poli' => '9',
            ],
            [
                'nama' => 'Dr. Maria Kaipu',
                'spesialis' => 'Spesialis Umum',
                'id_poli' => '1',
            ],
            [
                'nama' => 'Dr. Lukas Yeri',
                'spesialis' => 'Spesialis Bedah',
                'id_poli' => '6',
            ],
            [
                'nama' => 'Dr. Fransiscus Mabo',
                'spesialis' => 'Spesialis Mata',
                'id_poli' => '3',
            ],
            [
                'nama' => 'Dr. Kristina Wanimbo',
                'spesialis' => 'Spesialis THT',
                'id_poli' => '8',
            ],
            [
                'nama' => 'Dr. Agustinus Wayandop',
                'spesialis' => 'Spesialis Anak',
                'id_poli' => '7',
            ],
            [
                'nama' => 'Dr. Regina Elop',
                'spesialis' => 'Spesialis Kebidanan dan Kandungan',
                'id_poli' => '4',
            ],
            [
                'nama' => 'Dr. Yuliana Mandobouw',
                'spesialis' => 'Spesialis Gigi',
                'id_poli' => '2',
            ],
            [
                'nama' => 'Dr. Stefanus Wospak',
                'spesialis' => 'Spesialis Paru',
                'id_poli' => '10',
            ],
            [
                'nama' => 'Dr. Veronica Matuan',
                'spesialis' => 'Spesialis Saraf',
                'id_poli' => '5',
            ],
        ];

        foreach ($dokters as $dokter) {
            \App\Models\Dokter::create($dokter);
        } 
    }
}
