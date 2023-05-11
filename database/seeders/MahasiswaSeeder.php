<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'prodi_id' => '1',
                'kelas_id' => '2',
                'nim' => '2141720068',
                'nama' => 'Bahtiar Rifa\'i',
                'jk' => 'l',
                'tempat_lahir' => 'Karanganyar',
                'tanggal_lahir' => '2003-02-26',
                'alamat' => 'Ponorogo',
                'hp' => '082264496644'
            ]
        ]);
    }
}
