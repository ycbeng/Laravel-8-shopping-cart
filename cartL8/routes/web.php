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
});

Route::get('/insertCategory', function () {
    return view('insertCategory');
});

Route::get('/insertProduct', function () {
    return view('insertProduct');
});

Route::get('/contactus', function () {
    return view('contact');
});



Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('addCategory');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'show'])->name('showCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');


Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');

Route::get('/showProduct', [App\Http\Controllers\ProductController::class, 'show'])->name('showProduct');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
