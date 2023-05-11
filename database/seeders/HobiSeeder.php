<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hobi')->insert([
            [
                'mahasiswa_id' => 1,
                'hobi' => 'Bermain Game',
                'alasan' => ' Bermain game bisa untuk menghibur diri dan melupakan masalah sejenak.
                Game juga dapat memberikan pengalihan dari tugas-tugas sehari-hari yang menjenuhkan.'
            ],
            [
                'mahasiswa_id' => 1,
                'hobi' => 'Mendengarkan Music',
                'alasan' => ' Mendengarkan musik dapat membantu mengurangi stres dan menenangkan pikiran.
                Musik yang suka adalah dangdut.'
            ],
            [
                'mahasiswa_id' => 1,
                'hobi' => 'Bermain Futsal',
                'alasan' => 'Bermain futsal melibatkan gerakan aktif seperti berlari, melompat, dan menggiring bola,
                yang dapat membantu meningkatkan kesehatan jantung dan paru-paru, serta meningkatkan daya tahan fisik.'
            ]
        ]);
    }
}
