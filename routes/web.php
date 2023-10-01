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

Route::get('/pengguna',[PenggunaController::class, 'index'])->name('pengguna');

Route::get('/tambahdata',[PenggunaController::class, 'tambahdata'])->name('tambahdata');

Route::post('/insertdata',[PenggunaController::class, 'insertdata'])->name('insertdata');

// Route::get('/tampilanawal',[PenggunaController::class, 'tampilanawal'])->name('tampilanwal');
Route::get('/tampilanawal', function () {
    return view('tampilanawal');
});

Route::get('/preview', function () {
    return view('preview');
})->name('preview');