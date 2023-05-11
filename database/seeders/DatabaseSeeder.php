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
        $this->call([
            KendaraanSeeder::class,
            HobiSeeder::class,
            MataKuliahSeeder::class,
            KeluargaSeeder::class,
            UserSeeder::class,
            MahasiswaSeeder::class,
            ProdiSeeder::class,
            KelasSeeder::class,
            MahasiswaMataKuliahSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
