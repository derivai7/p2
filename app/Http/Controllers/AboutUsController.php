<?php

namespace App\Http\Controllers;

class AboutUsController extends Controller
{
    public function index(): string
    {
        return view('about-us');
    }
}
