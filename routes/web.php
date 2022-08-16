<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;

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

//Base Endpoint
Route::get('/', [BaseController::class, 'index'])->name('home.index');

//Login Endpoint
Route::prefix('/login')->group(function() {
  Route::get('/', function() { return view('login'); });
  Route::post('/', [UsersController::class, 'login'])->name('user.login');
});

//Register Endpoint
Route::prefix('/register')->group(function() {
  Route::get('/', function() { return view('register'); });
  Route::post('/', [UsersController::class, 'register'])->name('user.register');
});

//Product Endpoint
Route::prefix('/products')->group(function() {
  Route::get('/{id}', [ProductsController::class, 'getById']);
  Route::delete('/{id}', [ProductsController::class, 'deleteById']);
  Route::put('/{id}', [ProductsController::class, 'updateById']);
});
