<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kendaraan')->insert([
                [
                    'nopol' => 'AE 1234 PO',
                    'merk' => 'Honda',
                    'jenis' => 'Jazz',
                    'tahun_buat' => '2017',
                    'warna' => 'Putih'
                ],
                [
                    'nopol' => 'AE 5678 NO',
                    'merk' => 'Honda',
                    'jenis' => 'Brio',
                    'tahun_buat' => '2018',
                    'warna' => 'Merah'
                ],
                [
                    'nopol' => 'AE 9101 NO',
                    'merk' => 'Honda',
                    'jenis' => 'Civic',
                    'tahun_buat' => '2021',
                    'warna' => 'Hitam'
                ]
            ]
        );
    }
}
