<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//1. Halaman Home
Route::get('/', [HomeController::class, 'home']);

//2. Halaman Produk `
Route::prefix('category')->group(function () {
    Route::get('/produk1', [ProductController::class, 'p1']);
    Route::get('/produk2', [ProductController::class, 'p2']);
});

Route::get('/news/{news?}', [NewsController::class, 'newsParam']);

Route::prefix('program')->group(function () {
    Route::get('/program1', [ProgramController::class, 'pro1']);
    Route::get('/program2', [ProgramController::class, 'pro2']);
});

Route::get('/about-us', [AboutController::class, 'about']);

Route::resource('/contact-us', ContactController::class, ['only'=> ['index', 'create', 'store']]); 