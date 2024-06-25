<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Panggil semua seeder yang diperlukan
        $this->call([
            PoliSeeder::class,
            TarifSeeder::class,
            DokterSeeder::class,
            PerawatSeeder::class,
            KamarSeeder::class,
            ObatSeeder::class,
            SuperAdminSeeder::class,
        ]);
    }
}
