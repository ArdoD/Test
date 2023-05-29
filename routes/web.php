<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Models\Publisher;
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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [BookController::class, 'index']);
Route::get('/detail/{id}', [BookController::class, 'show']);
Route::get('/category/{id}', [CategoryController::class, 'filter']);
Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/publisherdetail/{id}', [PublisherController::class, 'show']);
