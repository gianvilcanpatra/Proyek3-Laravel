<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

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
    return view('tampilanawal');
})->name('home');

Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');

Route::get('/tambahdata', [PenggunaController::class, 'tambahdata'])->name('tambahdata');

Route::post('/insertdata', [PenggunaController::class, 'insertdata'])->name('insertdata');

// Route::get('/tampilanawal',[PenggunaController::class, 'tampilanawal'])->name('tampilanwal');
Route::get('/tampilanawal', function () {
    return view('tampilanawal');
});

Route::get('/preview', function () {
    return view('preview');
})->name('preview');

Route::get('/templatecv', function () {
    return view('templatecv');
})->name('templatecv');

Route::get('/tampilkandata/{id}', [PenggunaController::class, 'tampilkandata'])->name('tampilkandata');

Route::get('/tampil/{id}', [PenggunaController::class, 'tampil'])->name('tampil');

Route::get('/tampilriwayatpendidikan/{id}', [PenggunaController::class, 'tampilriwayatpendidikan'])->name('tampilriwayatpendidikan');

Route::get('/tampilriwayatpekerjaan/{id}', [PenggunaController::class, 'tampilriwayatpekerjaan'])->name('tampilriwayatpekerjaan');

Route::get('/tampilprofil/{id}', [PenggunaController::class, 'tampilprofil'])->name('tampilprofil');

Route::get('/tampildokumenpendukung/{id}', [PenggunaController::class, 'tampildokumenpendukung'])->name('tampildokumenpendukung');

Route::post('/updatedata/{id}', [PenggunaController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [PenggunaController::class, 'delete'])->name('delete');