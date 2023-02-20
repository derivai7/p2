<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id = 1): string
    {
        return "Halaman Artikel dengan ID $id";
    }
}
