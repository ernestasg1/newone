<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::name('products.')->prefix('/products')->controller(ProductController::class)->group(function () {
    Route::get('/','index')->name('index');
});

Route::name('orders.')->prefix('/orders')->controller(OrderController::class)->group(function () {
    Route::get('/','index')->name('index');
});

Route::get('/contact',function () {
    return view('contact');
})->name('contact');

asdasd;
