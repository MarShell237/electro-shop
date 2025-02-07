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

Route::middleware('auth')->group(function(){
  Route::resource('product', ProductController::class);
  Route::resource('category', CategoryController::class);
});