<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->Middleware('auth');

Route::get('/products',[ProductController::class,'show_source']);

//Route::get('/product/form',[ProductController::class,'form'])->name('product.form');
Route::get('/product/form/{id?}',[ProductController::class,'form'])->name('product.form');
Route::post('/product/save',[ProductController::class,'save'])->name('product.save');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Brands
Route::get('/brands',[BrandController::class,'show_source']);
Route::get('/brand/formb/{id?}',[BrandController::class,'form'])->name('brand.formb');
Route::post('/brand/save',[BrandController::class,'save'])->name('brand.save');
Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');

//Rutas Category
Route::get('/categories',[CategoryController::class,'show_source']);
Route::get('/category/formc/{id?}',[CategoryController::class,'form'])->name('category.formc');
Route::post('/category/save',[CategoryController::class,'save'])->name('category.save');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');
