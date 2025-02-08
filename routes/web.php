<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home']);
Route::get('signup', [AuthController::class,'signup']);
Route::post('signup', [AuthController::class,'doSignup']);
Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class,'doLogin']);
Route::delete('logout', [AuthController::class,'logout']);
Route::get('product/filter/{category}',[HomeController::class,'filterCategory']);
Route::post('product/filter', [HomeController::class,'filter'])->name('product.filter');


Route::middleware('auth')->group(function(){
  Route::resource('product', ProductController::class)->except(['show']);
  Route::resource('category', CategoryController::class)->except(['show']);
});