<?php

namespace App\Http\Controllers;

use App\Models\KendaraanModel;

class KendaraanController extends Controller
{
    public function index()
    {
        return view('kendaraan', ['title' => 'Daftar Kendaraan', 'kendaraan' => KendaraanModel::all()]);
    }
}
