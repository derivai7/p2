<?php

namespace App\Http\Controllers;

class KuliahController extends Controller
{
    public function index()
    {
        $content = 'Pada semester 4, mahasiswa jurusan TI biasanya mempelajari mata kuliah yang lebih spesifik dan
        terfokus, seperti keamanan jaringan, pengembangan aplikasi web dan mobile, atau analisis data.
        Ini memungkinkan mahasiswa untuk memperdalam pengetahuan dan keterampilan mereka di bidang tertentu.';

        return view('kuliah')->with('title', ' Pengalaman Kuliah')->with('content', $content);
    }
}
