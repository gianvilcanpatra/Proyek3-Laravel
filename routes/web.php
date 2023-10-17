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

Route::get('/templatecv', function () {
    return view('templatecv');
})->name('templatecv');

Route::get('/edit', function () {
    $userData = session('userData')[count(session('userData')) - 1]; 
    return view('tambahdata', compact('userData'));
})->name('edit');

Route::get('/tampilkandata/{id}',[PenggunaController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}',[PenggunaController::class, 'updatedata'])->name('updatedata');
