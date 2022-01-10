<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\GabungPackageController;
use App\Http\Controllers\ReviewController;

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
    return view('home', [
        "head" => "home",
    ]);
});


Route::get('/profile/customer', [ReviewController::class, 'show'])->middleware('auth');

Route::resource('/profile/review',ReviewController::class)->middleware('auth');
Route::resource('/profile/menu',MenuController::class)->middleware('auth');
Route::resource('/profile',Vendorcontroller::class)->middleware('auth');
Route::resource('/admin/package',PackageController::class)->middleware('auth');
Route::resource('/admin/listpackage',GabungPackageController::class)->middleware('auth');
Route::resource('/admin/book',BookController::class)->middleware('auth');


Route::get('/login', [logincontroller::class, 'index'])->name('login');
Route::get('/list-vendor', [homecontroller::class, 'vendor']);
Route::get('/list-package', [homecontroller::class, 'package']);
Route::post('/login', [logincontroller::class, 'login']);
Route::post('/logout', [logincontroller::class, 'logout']);
Route::get('/review', [homecontroller::class, 'review']);

Route::get('/register', [registercontroller::class, "index"])->middleware('guest');
Route::post('/register', [registercontroller::class, 'store']);
