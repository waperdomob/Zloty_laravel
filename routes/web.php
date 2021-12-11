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

    Route::get('users/pdfUsers',[UserController::class, 'pdfUsers'] )->name('users.pdf');
    Route::get('users/pdfProducts/{id}',[ProductController::class, 'pdfProducts'] )->name('products.pdf');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::resource('users', UserController::class)->names('users');
    Route::get('products/list/{id}',[ProductController::class, 'list'])->name('products.list'); 
    Route::resource('products', ProductController::class)->names('products');
    Route::put('/products/{id}',[ProductController::class, 'exchange'])->name('products.exchange');
    /* Route::get('users/{id}', [ProductController::class, 'validation'])->name('products.validation'); */

    Route::get('/home', [UserController::class, 'index'])->name('home');
    
});
