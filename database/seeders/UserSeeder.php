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
            'password' => Hash::make('taufik'), // Ensure you use a strong password in production
            'role' => 'administrator',
        ]);
        User::create([
            'name' => 'Ridwan Nur Hakim',
            'email' => 'ridwannur@rsus.com',
            'password' => Hash::make('ridwan'), // Ensure you use a strong password in production
            'role' => 'dokter',
        ]);
        User::create([
            'name' => 'Arjuna Rinaldi',
            'email' => 'arjuna@rsus.com',
            'password' => Hash::make('arjuna'), // Ensure you use a strong password in production
            'role' => 'perawat',
        ]);

    }
}