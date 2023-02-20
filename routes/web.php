<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//praktikum 1

// Route::get('/', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "Nim: 2141720068, Nama: Bahtiar Rifa'i";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID $id";
// });

//praktikum 2

// Route::resource('/', PageController::class);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id?}', [PageController::class, 'articles']);

Route::resource('/', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/articles/{id?}', ArticleController::class);