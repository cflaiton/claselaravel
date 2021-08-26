<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->Middleware('auth');

// Route::get('/usuario', function () {
//     return ("Hola mundo");
// });

// Route::get('/usuario/{nombre_usuario?}',
// [PersonaController::class,'mostrar'])->where('nombre_usuario', '[A-Za-z]+');

Route::get('/products',[ProductController::class,'show_source']);

//Route::get('/product/form',[ProductController::class,'form'])->name('product.form');
Route::get('/product/form/{id?}',[ProductController::class,'form'])->name('product.form');

Route::post('/product/save',[ProductController::class,'save'])->name('product.save');

Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
