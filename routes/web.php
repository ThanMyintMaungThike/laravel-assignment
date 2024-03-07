<?php

use App\Http\Controllers\Product\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products', [ProductController::class, 'index'])->name('products.home');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/save', [ProductController::class, 'save'])->name('products.save');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
