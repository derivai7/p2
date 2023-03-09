<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;

class MataKuliahController extends Controller
{
    public function index()
    {
        return view('matakuliah', ['title' => 'Daftar Mata Kuliah', 'matakuliah' => MataKuliahModel::all()]);
    }
}
