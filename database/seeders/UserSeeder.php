<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@rsus.com',
            'password' => Hash::make('administrator'), // Ensure you use a strong password in production
            'role' => 'superadmin',
        ]);
        User::create([
            'name' => 'Taufik Fajar',
            'email' => 'taufik@rsus.com',
            'password' => Hash::make('taufik12'), // Ensure you use a strong password in production
            'role' => 'manajemen',
        ]);
        User::create([
            'name' => 'Ridwan Nur Hakim',
            'email' => 'ridwannur@rsus.com',
            'password' => Hash::make('ridwan123'), // Ensure you use a strong password in production
            'role' => 'dokter',
        ]);
        User::create([
            'name' => 'Arjuna Rinaldi',
            'email' => 'arjuna@rsus.com',
            'password' => Hash::make('arjuna12'), // Ensure you use a strong password in production
            'role' => 'perawat',
        ]);
        User::create([
            'name' => 'Arjuna Junaedi',
            'email' => 'arjunajunaedi@rsus.com',
            'password' => Hash::make('arjunaedi'), // Ensure you use a strong password in production
            'role' => 'rawat_jalan',
        ]);
        User::create([
            'name' => 'Juna',
            'email' => 'juna@rsus.com',
            'password' => Hash::make('juna1234'), // Ensure you use a strong password in production
            'role' => 'rawat_inap',
        ]);
        User::create([
            'name' => 'Rinaldi',
            'email' => 'rinaldi@rsus.com',
            'password' => Hash::make('rinaldi0'), // Ensure you use a strong password in production
            'role' => 'pendaftaran',
        ]);

    }
}
