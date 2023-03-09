<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keluarga')->insert([
            [
                'status' => 'Bapak',
                'slug' => 'bapak',
                'nama' => 'Imam Asrofi',
                'jk' => 'l',
                'tempat_tinggal' => 'Ponorogo'
            ],
            [
                'status' => 'Ibu',
                'slug' => 'ibu',
                'nama' => 'Dwi Handayani',
                'jk' => 'p',
                'tempat_tinggal' => 'Ponorogo'
            ],
            [
                'status' => 'Anak',
                'slug' => 'anak',
                'nama' => 'Bahtiar RIfa\'i',
                'jk' => 'l',
                'tempat_tinggal' => 'Ponorogo'
            ]
        ]);
    }
}
