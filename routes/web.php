<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\OrdersController;
use App\Http\Controllers\Controller\PagesController;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Users;

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

//PAGES $DATA TABLES CONTROLLER
Route::middleware('auth', 'verified')->prefix('admin/pages')->group(
    function(){
        Route::get('/users', [App\Http\Controllers\PagesController::class, 'users'])->name('admin.pages.users');
        Route::get('/products', [App\Http\Controllers\PagesController::class, 'products'])->name('admin.pages.products');
        Route::get('/orders', [App\Http\Controllers\PagesController::class, 'orders'])->name('admin.pages.orders');
});
    
    
//SEARCH CONTROLLER
Route::get('/search_results', [App\Http\Controllers\ProductsController::class, 'store'])->name('search_results');

//ORDERS CONTROLLER
Route::get('/orders', [App\Http\Controllers\OrdersController::class, 'index'])->middleware(['auth'])->name('orders');

//CART CONTROLLER
Route::get('/dashboard', [App\Http\Controllers\ProductsController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/', [App\Http\Controllers\ProductsController::class, 'index']);  
Route::get('cart', [App\Http\Controllers\ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductsController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\ProductsController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\ProductsController::class, 'remove'])->name('remove.from.cart');
// Route::delete('checkout-from-cart', [App\Http\Controllers\ProductsController::class, 'destroy']);

require __DIR__.'/auth.php';
