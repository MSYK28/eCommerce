<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Products;

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

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth'])->name('cart');

// Route::get('/search_results', function () {
//     return view('search_results');
// })->middleware(['auth'])->name('search_results');

Route::get('/checkout', function() {
    return view('checkout');
})->middleware(['auth'])->name('checkout');


//ADMIN CONTROLLERS
Route::middleware('auth', 'verified')->prefix('admin')->group(
    function(){
        Route::get('/index', function () {return view('admin.index');});
        Route::get('/pages', function () {return view('admin.pages');});
});

//PRODUCTS CONTROLLER


//SEARCH CONTROLLER
Route::get('/search_results', [App\Http\Controllers\ProductsController::class, 'store'])->name('search_results');

//CART CONTROLLER
Route::get('/dashboard', [App\Http\Controllers\ProductsController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);  
Route::get('cart', [App\Http\Controllers\ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductsController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\ProductsController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductsController::class, 'remove'])->name('remove.from.cart');

require __DIR__.'/auth.php';
