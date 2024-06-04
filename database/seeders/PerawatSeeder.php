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
        $perawats=[
            [
                'nama' => 'Ani Septiana',
                'jabatan' => 'Perawat Kepala',
            ],
            [
                'nama' => 'Budi Mulyono',
                'jabatan' => 'Perawat Staff',
            ],
            [
                'nama' => 'Chandra Sari',
                'jabatan' => 'Perawat Kamar Operasi',
            ],
            [
                'nama' => 'Desi Wulandari',
                'jabatan' => 'Perawat Mata',
            ],
            [
                'nama' => 'Eno Sutrisno',
                'jabatan' => 'Perawat ICU',
            ],
            [
                'nama' => 'Fahmi Akbar',
                'jabatan' => 'Perawat Anak',
            ],
            [
                'nama' => 'Gita Permata',
                'jabatan' => 'Bidan',
            ],
            [
                'nama' => 'Hadi Prasetyo',
                'jabatan' => 'Perawat Kesehatan Mental',
            ],
            [
                'nama' => 'Indah Safitri',
                'jabatan' => 'Perawat Pernafasan',
            ],
            [
                'nama' => 'Joko Raharjo',
                'jabatan' => 'Perawat Neurologi',
            ],
            [
                'nama' => 'Kinanti Purnomo',
                'jabatan' => 'Perawat Kepala',
            ],
            [
                'nama' => 'Lutfi Ramadhan',
                'jabatan' => 'Perawat Staff',
            ],
            [
                'nama' => 'Maya Sari',
                'jabatan' => 'Perawat Kamar Operasi',
            ],
            [
                'nama' => 'Norman Bahari',
                'jabatan' => 'Perawat Mata',
            ],
            [
                'nama' => 'Olivia Setiawan',
                'jabatan' => 'Perawat ICU',
            ],
            [
                'nama' => 'Putra Nugraha',
                'jabatan' => 'Perawat Anak',
            ],
            [
                'nama' => 'Quincy Lestari',
                'jabatan' => 'Bidan',
            ],
            [
                'nama' => 'Raymond Gunawan',
                'jabatan' => 'Perawat Saraf',
            ],
        ];
        foreach ($perawats as $perawat) {
            \App\Models\Perawat::create($perawat);
        }
    }
}
