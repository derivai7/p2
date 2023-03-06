<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index()
    {
        return view('hobi', ['title' => 'Daftar Hobi', 'hobi' => HobiModel::all()]);
    }
}
