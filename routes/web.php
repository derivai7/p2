<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Auth;
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

//pwl-2

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
// Route::resource('/about', AboutUsController::class);
// Route::resource('/articles/{id?}', ArticleController::class);

//praktikum 3

//Route::prefix('category')->group(function () {
//    Route::get('/', function () {
//        return view('category');
//    });
//    Route::get('/marbel-edu-games', function () {
//        return "ini adalah halaman category marbel edu games";
//    });
//    Route::get('/marbel-and-friend-kids-games', function () {
//        return "ini adalah halaman category marbel and friend kids games";
//    });
//    Route::get('/riry-story-books', function () {
//        return "ini adalah halaman category riry story books";
//    });
//    Route::get('/kolak-kids-songs', function () {
//        return "ini adalah halaman category kolak kids";
//    });
//});
//
//Route::get('/news/{title}', function ($title) {
//    return "Berita tentang $title";
//});
//
//Route::prefix('program')->group(function () {
//    Route::get('/', function () {
//        return view('program');
//    });
//    Route::get('/karir', function () {
//        return "ini adalah halaman program karir";
//    });
//    Route::get('/magang', function () {
//        return "ini adalah halaman program magang";
//    });
//    Route::get('/kunjungan-industri', function () {
//        return "ini adalah halaman program kunjungan industri";
//    });
//});
//
//Route::get('/about-us', function () {
//    return "Ini adalah halaman about us";
//});
//
//Route::resource('/contact-us', ContactUsController::class);
//
//Route::get('/', function () {
//    return view('home');
//});

//pwl-3

//Route::resource('/', LoginController::class);
//
//Route::prefix('product')->group(function () {
//    Route::get('/', [ProductController::class, 'index']);
//    Route::get('/{product}', [ProductController::class, 'product']);
//});
//
//Route::get('/news/{title}', [NewsController::class, 'index']);
//
//Route::prefix('program')->group(function () {
//    Route::get('/', [ProgramController::class, 'index']);
//    Route::get('/magang', [ProgramController::class, 'magang']);
//    Route::get('/karir', [ProgramController::class, 'karir']);
//});
//
//Route::get('/about-us', [AboutUsController::class, 'index']);
//
//Route::resource('/contact-us', ContactUsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);

    Route::resource('/profile', ProfileController::class);

    Route::resource('/kuliah', KuliahController::class);

    Route::resource('/kendaraan', KendaraanController::class);

    Route::resource('/hobi', HobiController::class);

    Route::resource('/matakuliah', MataKuliahController::class);

    Route::prefix('keluarga')->group(function () {
        Route::get('/', [KeluargaController::class, 'index']);
        Route::get('/{data:slug}', [KeluargaController::class, 'show']);
    });

    Route::get('/logout', [LoginController::class, 'logout']);
});

Route::get('/', [LoginController::class, 'showLoginForm']);
