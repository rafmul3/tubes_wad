<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\GabungPackageController;
use App\Http\Controllers\TestimoniController;

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


Route::post('/profile/review/bayar', [homecontroller::class, 'bukti']);
Route::get('/testimoni', [homecontroller::class, 'testimoni_tampil']);
Route::post('/admin/testimoni_gambar/add', [homecontroller::class, 'testimoni']);
Route::post('/admin/testimoni_gambar/hapus', [homecontroller::class, 'testimoni_hapus']);
Route::get('/profile/customer', [ReviewController::class, 'show'])->middleware('auth');
Route::get('/profile/menu{$menu}/edit', [MenuController::class, 'create'])->middleware('auth');

Route::resource('/status',ReviewController::class)->middleware('auth');
Route::resource('/profile/menu',MenuController::class)->middleware('auth');
Route::resource('/profile',Vendorcontroller::class)->middleware('auth');
Route::resource('/admin/package',PackageController::class)->middleware('auth');
Route::resource('/admin/listpackage',GabungPackageController::class)->middleware('auth');
Route::resource('/admin/book',BookController::class)->middleware('auth');
Route::resource('/admin/testimoni',TestimoniController::class)->middleware('auth');

Route::post('/admin/applicant', [mailcontroller::class, 'sendmail']);
Route::post('/profile/thumbnail', [homecontroller::class, 'thumbnail']);
Route::post('/profile/thumbnail/hapus', [homecontroller::class, 'thumbnail_hapus']);
Route::post('/admin/applicant/hapus', [mailcontroller::class, 'destroy']);
Route::post('/login', [logincontroller::class, 'login']);
Route::post('/logout', [logincontroller::class, 'logout']);

Route::get('/admin/vendor', [ApplicantController::class, 'vendor']);
Route::get('/admin', [ApplicantController::class, 'dashboard']);
Route::get('/admin/applicant', [ApplicantController::class, 'index']);
Route::get('/login', [logincontroller::class, 'index'])->name('login')->middleware('guest');
Route::get('/sendmail', [logincontroller::class, 'index'])->name('login')->middleware('guest');
Route::get('/list-vendor', [homecontroller::class, 'vendor']);
Route::get('/list-package', [homecontroller::class, 'package']);
Route::get('/review', [homecontroller::class, 'review']);

Route::get('/register', [registercontroller::class, "index"])->middleware('guest');
Route::post('/register', [registercontroller::class, 'store']);
Route::post('/register-applicant', [registercontroller::class, 'applicant']);