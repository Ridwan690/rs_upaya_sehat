<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PerawatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perawats = [
            [
                'nama' => 'Ani Septiana',
                'jabatan' => 'Perawat Kepala',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Budi Mulyono',
                'jabatan' => 'Perawat Staff',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Chandra Sari',
                'jabatan' => 'Perawat Kamar Operasi',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Desi Wulandari',
                'jabatan' => 'Perawat Mata',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Eno Sutrisno',
                'jabatan' => 'Perawat ICU',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Fahmi Akbar',
                'jabatan' => 'Perawat Anak',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Gita Permata',
                'jabatan' => 'Bidan',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Hadi Prasetyo',
                'jabatan' => 'Perawat Kesehatan Mental',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Indah Safitri',
                'jabatan' => 'Perawat Pernafasan',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Joko Raharjo',
                'jabatan' => 'Perawat Neurologi',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Kinanti Purnomo',
                'jabatan' => 'Perawat Kepala',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Lutfi Ramadhan',
                'jabatan' => 'Perawat Staff',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Maya Sari',
                'jabatan' => 'Perawat Kamar Operasi',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Norman Bahari',
                'jabatan' => 'Perawat Mata',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Olivia Setiawan',
                'jabatan' => 'Perawat ICU',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Putra Nugraha',
                'jabatan' => 'Perawat Anak',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Quincy Lestari',
                'jabatan' => 'Bidan',
                'id_poli' => rand(1, 10),
            ],
            [
                'nama' => 'Raymond Gunawan',
                'jabatan' => 'Perawat Saraf',
                'id_poli' => rand(1, 10),
            ],
        ];
        foreach ($perawats as $perawat) {
            \App\Models\Perawat::create($perawat);
        }
    }
}
