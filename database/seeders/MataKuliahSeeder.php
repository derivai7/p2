<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliah')->insert([
            [
                'nama' => 'Kewarganegaraan',
                'sks' => 2,
                'jam' => 2,
                'semester' => 4
            ],
            [
                'nama' => 'Analisis dan Desain Berorientasi Objek',
                'sks' => 2,
                'jam' => 4,
                'semester' => 4
            ],
            [
                'nama' => 'Manajemen Proyek',
                'sks' => 2,
                'jam' => 3,
                'semester' => 4
            ],
            [
                'nama' => 'Proyek 1',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama' => 'Business Intelligence',
                'sks' => 2,
                'jam' => 4,
                'semester' => 4
            ],
            [
                'nama' => 'Jaringan Komputer',
                'sks' => 2,
                'jam' => 4,
                'semester' => 4
            ],
            [
                'nama' => 'Praktikum Jaringan Komputer',
                'sks' => 2,
                'jam' => 4,
                'semester' => 4
            ],
            [
                'nama' => 'Pemrograman Web Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama' => 'Statitik Komputasi',
                'sks' => 2,
                'jam' => 4,
                'semester' => 4
            ],
        ]);
    }
}
