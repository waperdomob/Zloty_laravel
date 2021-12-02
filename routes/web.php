<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('user.index');
})->name('home');

Route::resource('users', UserController::class)->names('users');
Route::put('/products/{id}',[ProductController::class])->name('products.exchange');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::resource('products', ProductController::class)->names('products');
    Route::put('/products/{id}',[ProductController::class, 'exchange'])->name('products.exchange');

    Route::get('/home', [UserController::class, 'index'])->name('home');
    
});
