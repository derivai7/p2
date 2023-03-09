<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index() {
        return view('keluarga', ['title' => 'Data Keluarga', 'keluarga' => KeluargaModel::all()]);
    }

    public function show(KeluargaModel $data) {
        return view('show-keluarga', ['title' => 'Detail ' . $data['status'], 'keluarga' => $data]);
    }
}
