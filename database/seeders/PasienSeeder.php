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
            'nama' => 'Ridwan Nurhakim',
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

        $pasienData = [
            [
                'nik' => '9204110201990001',
                'nama' => 'Ahmad Subarjo',
                'tempat_lahir' => 'Sidoarjo',
                'tanggal_lahir' => '1990-01-20',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Raja Ampat No. 1',
                'pendidikan' => 'D3',
                'agama' => 'Islam',
                'pekerjaan' => 'Wiraswasta',
                'status' => 'Menikah',
                'no_telepon' => '081345678901',
            ],
            [
                'nik' => '9204110201990002',
                'nama' => 'Andi Matalatta',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1988-05-15',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Ahmad Yani No. 2',
                'pendidikan' => 'S1/D4',
                'agama' => 'Kristen',
                'pekerjaan' => 'PNS',
                'status' => 'Menikah',
                'no_telepon' => '081345678902',
            ],
            [
                'nik' => '9204110201990003',
                'nama' => 'Bagus Prihatman',
                'tempat_lahir' => 'Cilacap',
                'tanggal_lahir' => '1992-07-10',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Basuki Rahmat No. 3',
                'pendidikan' => 'SMA/SMK Sederajat',
                'agama' => 'Islam',
                'pekerjaan' => 'Pegawai Negeri',
                'status' => 'Menikah',
                'no_telepon' => '081345678903',
            ],
            [
                'nik' => '9204110201990004',
                'nama' => 'Edi Sudarwanto',
                'tempat_lahir' => 'Banjarmasin',
                'tanggal_lahir' => '1995-12-25',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Merdeka No. 4',
                'pendidikan' => 'D3',
                'agama' => 'Islam',
                'pekerjaan' => 'TNI',
                'status' => 'Belum Menikah',
                'no_telepon' => '081345678904',
            ],
            [
                'nik' => '9204110201990005',
                'nama' => 'Bagas Priyambodo',
                'tempat_lahir' => 'Irian Jaya',
                'tanggal_lahir' => '1991-03-08',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Pattimura No. 5',
                'pendidikan' => 'S2',
                'agama' => 'Islam',
                'pekerjaan' => 'PNS',
                'status' => 'Menikah',
                'no_telepon' => '081345678905',
            ],
            [
                'nik' => '9204110201990006',
                'nama' => 'Tutuko Prayogo',
                'tempat_lahir' => 'Sorong',
                'tanggal_lahir' => '1994-11-30',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Diponegoro No. 6',
                'pendidikan' => 'SMA/SMK Sederajat',
                'agama' => 'Katolik',
                'pekerjaan' => 'Wiraswasta',
                'status' => 'Belum Menikah',
                'no_telepon' => '081345678906',
            ],
            [
                'nik' => '9204110201990007',
                'nama' => 'Nisa Andini',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1993-06-17',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Cendrawasih No. 7',
                'pendidikan' => 'SMA/SMK Sederajat',
                'agama' => 'Islam',
                'pekerjaan' => 'PNS',
                'status' => 'Belum Menikah',
                'no_telepon' => '081345678907',
            ],
            [
                'nik' => '9204110201990008',
                'nama' => 'Ambarsari Putri',
                'tempat_lahir' => 'Aceh',
                'tanggal_lahir' => '1990-02-25',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Yos Sudarso No. 8',
                'pendidikan' => 'SMA/SMK Sederajat',
                'agama' => 'Islam',
                'pekerjaan' => 'Wiraswasta',
                'status' => 'Menikah',
                'no_telepon' => '081345678908',
            ],
            [
                'nik' => '9204110201990009',
                'nama' => 'Teten Marjuki',
                'tempat_lahir' => 'Palembang',
                'tanggal_lahir' => '1989-09-19',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Pemuda No. 9',
                'pendidikan' => 'D3',
                'agama' => 'Katolik',
                'pekerjaan' => 'Swasta',
                'status' => 'Menikah',
                'no_telepon' => '081345678909',
            ],
            [
                'nik' => '9204110201990010',
                'nama' => 'Zaenal Muttaqin',
                'tempat_lahir' => 'Pontianak',
                'tanggal_lahir' => '1996-04-12',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Imam Bonjol No. 10',
                'pendidikan' => 'S1/D4',
                'agama' => 'Islam',
                'pekerjaan' => 'Swasta',
                'status' => 'Belum Menikah',
                'no_telepon' => '081345678910',
            ],
        ];

        foreach ($pasienData as $data) {
            Pasien::create($data);
        }
    }
}
