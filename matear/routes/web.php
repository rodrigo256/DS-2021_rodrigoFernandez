<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoritesProductsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Models\FavoritesProducts;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart', [CartController::class, 'clear'])->name('cart.clear');




Route::group(['middleware' => 'check'], function () {
    Route::get('/profile', [UserController::class, 'index'])->name('user');
    Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete');
   // Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::get('/user/export-dates', [UserController::class, 'downloadJSON'])->name('download');
    Route::resource('card', CardController::class);
    Route::resource('user', UserController::class);
    Route::resource('shop', ShopController::class);
    Route::resource('favorite', FavoritesProductsController::class);
    /* Route::get('/profile/add-card', [CardController::class, 'create'])->name('create'); */
});


/* Route::resource('user', UserController::class); */

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
