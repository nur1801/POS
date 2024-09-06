<?php

use Illuminate\Support\Facades\Route;
// Tugas Pratikum No.3 Route Halaman Home
use App\Http\Controllers\HomeController;

// Tugas Pratikum No.3 Route Halaman Product
use App\Http\Controllers\CategoryController;

// Tugas Pratikum No.3 Route Halaman User
use App\Http\Controllers\UserController;

// Tugas Pratikum No.3 Route Halaman Penjualan
use App\Http\Controllers\PenjualanController;

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

// Tugas Pratikum No.3 Route Halaman Home
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'home']);
// -------------------------------------------------------------------

// Tugas Pratikum No.3 Route Halaman Product
Route::get('/category/food-baverage',[CategoryController::class, 'fnb']);
Route::get('/category/beauty-health', [CategoryController::class, 'bh']);
Route::get('/category/home-care', [CategoryController::class, 'homecare']); 
Route::get('/category/baby-kid', [CategoryController::class, 'babykid']);
// -------------------------------------------------------------------

// Tugas Pratikum No.3 Route Halaman User
Route::get('/user/{id}/nama/{nama}', [UserController::class, 'user']);
// -------------------------------------------------------------------

// Tugas Pratikum No.3 Route Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
// -------------------------------------------------------------------