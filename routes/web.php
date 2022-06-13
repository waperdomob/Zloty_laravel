<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
})->name('/');
Route::get('/knowUs', function () {
    return view('components.knowUs');
})->name('knowUs');

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
    Route::get('users/products/{id}', [ProductController::class, 'validation'])->name('products.validation');

    Route::get('/home', [UserController::class, 'index'])->name('home');
    
});
/* Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post'); */