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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/orders', function () {
    return view('orders');
})->name('orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/customers', function () {
    return view('customers');
})->name('customers');

Route::middleware(['auth:sanctum', 'verified'])->get('/products', function () {
    return view('products');
})->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/search', function () {
    return view('search');
})->name('search');

Route::middleware(['auth:sanctum', 'verified'])->get('/customers/add', function () {
    return view('create-customer');
})->name('create-customer');
