<?php

use App\Http\Controllers\Admins\KategoriController;
use App\Http\Controllers\Admins\MitraController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.dashboard');
})->name('/');

Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
Route::post('/kategori', [KategoriController::class, 'store'])->name('admin.kategori-store');
Route::post('/kategori/{token}', [KategoriController::class, 'update'])->name('admin.kategori-update');
Route::get('/kategori/{token}', [KategoriController::class, 'destroy'])->name('admin.kategori-destroy');

Route::get('/mitra', [MitraController::class, 'index'])->name('admin.mitra');
Route::get('/mitra/overview', function () {return view('admin.mitra.mitra_detail');})->name('admin.mitra-detail');
Route::get('/mitra/add', [MitraController::class, 'create'])->name('admin.mitra-add');
Route::post('/mitra/add', [MitraController::class, 'store'])->name('admin.mitra-addAction');
Route::get('/mitra/{token}', [MitraController::class, 'index'])->name('admin.mitra-destroy');
