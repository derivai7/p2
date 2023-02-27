<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product');
    }

    public function product($product) {
        return view('product')->with('product', $product);
    }
}
