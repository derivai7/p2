<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        return view('program');
    }

    public function magang() {
        return view('program')->with('program', 'magang');
    }

    public function karir() {
        return view('program')->with('program', 'karir');
    }
}
