<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nik' => '3204110209970001',
            'nama' => 'Taufik Fajar',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1997-09-01',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Raya Cipaku No. 10',
            'pendidikan' => 'SMA/SMK Sederajat',
            'agama' => 'Islam',
            'pekerjaan' => 'Pelajar/Mahasiswa',
            'status' => 'Belum Menikah',
            'no_telepon' => '081234567890',
        ]);
        Pasien::create([
            'nik' => '3204110209970002',
            'nama' => 'Ridwan Nur Hakim',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1997-09-02',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Raya Cipaku No. 11',
            'pendidikan' => 'SMA/SMK Sederajat',
            'agama' => 'Islam',
            'pekerjaan' => 'Pelajar/Mahasiswa',
            'status' => 'Belum Menikah',
            'no_telepon' => '081234567890',
        ]);
        Pasien::create([
            'nik' => '3204110209970003',
            'nama' => 'Arjuna Rinaldi',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1997-09-03',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Raya Cipaku No. 12',
            'pendidikan' => 'SMA/SMK Sederajat',
            'agama' => 'Islam',
            'pekerjaan' => 'Pelajar/Mahasiswa',
            'status' => 'Belum Menikah',
            'no_telepon' => '081234567890',
        ]);
    }
}
