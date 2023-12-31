<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KeterampilanController;
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
    return view('login');
})->name('home');

Route::middleware(['auth'])->group(function () {
        Route::get('/pengguna',[PenggunaController::class, 'index'])->name('pengguna');
        Route::get('/oneuser',[PenggunaController::class, 'oneuser'])->name('oneuser');
        Route::get('/profil',[PenggunaController::class, 'profil'])->name('profil');
        Route::get('/tampilprofil/{id}',[PenggunaController::class, 'tampildata'])->name('tampildata');
        Route::post('/insertdata',[PenggunaController::class, 'insertdata'])->name('insertdata');
        Route::put('/updatedata/{id}',[PenggunaController::class, 'updatedata'])->name('updatedata');

        Route::put('/updatedatapendidikan/{id}',[PendidikanController::class, 'updatedatapendidikan'])->name('updatedata.pendidikan');
        Route::get('/tampilriwayatpendidikan',[PendidikanController::class, 'tampilriwayatpendidikan'])->name('tampilriwayatpendidikan');

        Route::put('/updatedatapekerjaan/{id}',[PekerjaanController::class, 'updatedatapekerjaan'])->name('updatedata.pekerjaan');
        Route::get('/tampilriwayatpekerjaan',[PekerjaanController::class, 'tampilriwayatpekerjaan'])->name('tampilriwayatpekerjaan');

        Route::put('/updatedataketerampilan/{id}',[KeterampilanController::class, 'updatedataketerampilan'])->name('updatedata.keterampilan');
        Route::get('/tampilketerampilan',[KeterampilanController::class, 'tampilketerampilan'])->name('tampilketerampilan');


        Route::get('/deletependidikan/{id}',[PendidikanController::class, 'delete'])->name('delete');
        Route::get('/deletepekerjaan/{id}',[PekerjaanController::class, 'delete'])->name('delete');
        Route::get('/deleteketerampilan/{id}',[KeterampilanController::class, 'delete'])->name('delete');
        Route::get('/deletedokumen/{id}',[DokumenController::class, 'delete'])->name('delete');



        Route::get('/riwayatpendidikan', [PendidikanController::class, 'tambahdatapendidikan'])->name('tambahdatapendidikan');
        Route::post('/insertdatapendidikan', [PendidikanController::class, 'insertdatapendidikan'])->name('insertdatapendidikan');

        Route::get('/riwayatpekerjaan', [PekerjaanController::class, 'tambahdatapekerjaan'])->name('tambahdatapekerjaan');
        Route::post('/insertdatapekerjaan', [PekerjaanController::class, 'insertdatapekerjaan'])->name('insertdatapekerjaan');

        Route::get('/keterampilan', [KeterampilanController::class, 'tambahdataketerampilan'])->name('tambahdataketerampilan');
        Route::post('/insertdataketerampilan', [KeterampilanController::class, 'insertdataketerampilan'])->name('insertdataketerampilan');

        Route::get('/dokumenpendukung', [DokumenController::class, 'tambahdatadokumen'])->name('tambahdatadokumen');
        Route::post('/insertdatadokumen', [DokumenController::class, 'insertdatadokumen'])->name('insertdatadokumen');

        Route::get('/keterampilan', [KeterampilanController::class, 'tambahdataketerampilan'])->name('tambahdataketerampilan');
        Route::post('/insertdataketerampilan', [KeterampilanController::class, 'insertdataketerampilan'])->name('insertdataketerampilan');

        Route::get('/tampilanawal', function () {
            return view('tampilanawal');
});

Route::get('/preview', [PenggunaController::class, 'tampilcv'])->name('tampilcv');


Route::get('/templatecv', function () {
    return view('templatecv');
})->name('templatecv');

Route::get('/edit', function () {
    $userData = session('userData')[count(session('userData')) - 1]; // Retrieve the last data from the session
    return view('tambahdata', compact('userData'));
})->name('edit');

Route::get('/tampilkandata/{id}',[PenggunaController::class, 'tampilkandata'])->name('tampilkandata');

Route::get('/tampil/{id}',[PenggunaController::class, 'tampil'])->name('tampil');

Route::get('/delete/{id}',[PenggunaController::class, 'delete'])->name('delete');

});

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');


Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');

Route::get('/cetak',[PenggunaController::class,'cetak'])->name('cetak');
Route::get('/cetak',[PendidikanController::class,'cetak'])->name('cetak');



