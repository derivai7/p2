<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(): string
    {
        return "Nim: 2141720068, Nama: Bahtiar Rifa'i";
    }
}
