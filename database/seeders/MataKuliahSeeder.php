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
                'matkul' => 'Pemrograman Web Lanjut',
                'dosen_pengampu' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
                'sks' => 3
            ],
            [
                'matkul' => 'Proyek 1',
                'dosen_pengampu' => 'Farid Angga Pribadi, S.Kom., M.Kom.',
                'sks' => 6
            ],
            [
                'matkul' => 'Analisis dan Desain Berorentasi Objek',
                'dosen_pengampu' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.',
                'sks' => 2
            ],
            [
                'matkul' => 'Manajemen Proyek',
                'dosen_pengampu' => 'Candra Bella Vista, S.Kom., M.T.',
                'sks' => 2
            ],
            [
                'matkul' => 'Jaringan Komputer',
                'dosen_pengampu' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'sks' => 6
            ]
        ]);
    }
}
