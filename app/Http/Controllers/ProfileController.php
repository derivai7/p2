<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Bahtiar Rifa\'i',
            'address' => 'Ponorogo'
        ];

        return view('profile')->with('title', 'Profile')->with('data', $data);
    }
}
