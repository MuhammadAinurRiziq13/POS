<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class,'index']);
// Route::get('/user', [UserController::class,'index']);
Route::get('/user/{id}/name/{name}', [UserController::class,'index']);
Route::get('/transaksi', [TransaksiController::class,'index']);


// Route::prefix('categories')->group(function () {
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/{category}', [ProductController::class, 'category']);
// });
Route::prefix('categories')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});


