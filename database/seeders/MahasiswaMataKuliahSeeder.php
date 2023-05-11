<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa_matakuliah')->insert([
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '1',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '2',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '3',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '4',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '5',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '6',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '7',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '8',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '1',
                'matakuliah_id' => '9',
                'nilai' => 'A'
            ],
        ]);
    }
}
