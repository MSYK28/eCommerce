<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth'])->name('cart');

Route::get('/search_results', function () {
    return view('search_results');
})->middleware(['auth'])->name('search_results');

require __DIR__.'/auth.php';
