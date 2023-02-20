<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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

// Route::resource('/', HomeController::class);
// Route::resource('/about', AboutController::class);
// Route::resource('/articles/{id?}', ArticleController::class);

//praktikum 3

Route::prefix('category')->group(function () {
    Route::get('/', function () {
        return view('category');
    });
    Route::get('/marbel-edu-games', function () {
        return "ini adalah halaman category marbel edu games";
    });
    Route::get('/marbel-and-friend-kids-games', function () {
        return "ini adalah halaman category marbel and friend kids games";
    });
    Route::get('/riry-story-books', function () {
        return "ini adalah halaman category riry story books";
    });
    Route::get('/kolak-kids-songs', function () {
        return "ini adalah halaman category kolak kids";
    });
});

Route::get('/news/{title}', function ($title) {
    return "Berita tentang $title";
});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return view('program');
    });
    Route::get('/karir', function () {
        return "ini adalah halaman program karir";
    });
    Route::get('/magang', function () {
        return "ini adalah halaman program magang";
    });
    Route::get('/kunjungan-industri', function () {
        return "ini adalah halaman program kunjungan industri";
    });
});

Route::get('/about-us', function () {
    return "Ini adalah halaman about us";
});

Route::resource('/contact-us', ContactController::class);

Route::get('/', function () {
    return view('home');
});