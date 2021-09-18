<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
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


//Rutas Brands

// Rutas Listar
Route::get('/brands',[BrandController::class,'show_source']);


// Rutas Formulario
 Route::get('/brand/formb/{id?}',[BrandController::class,'form'])->name('brand.formb');

// Ruta Guardar
Route::post('/brand/save',[BrandController::class,'save'])->name('brand.save');

//Ruta Eliminar Brand
Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');


use App\Http\Controllers\InvoiceController;
Route::get('/invoices',[InvoiceController::class , 'show']);
Route::get('/invoice/form',[InvoiceController::class,'form'])->name('invoice.form');

