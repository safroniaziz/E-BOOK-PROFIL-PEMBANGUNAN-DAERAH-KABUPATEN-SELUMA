<?php

use App\Http\Controllers\DataStatistikSektoralController;
use App\Http\Controllers\DataWilayahController;
use App\Http\Controllers\KelompokDataSektoralController;
use App\Http\Controllers\KelompokDetailController;
use App\Http\Controllers\KelompokTableController;
use App\Http\Controllers\KolomDataController;
use App\Http\Controllers\KolomDataSektoralController;
use App\Http\Controllers\LuasWilayahDenganKetinggianTempatController;
use App\Http\Controllers\LuasWilayahPerKecamatanController;
use App\Http\Controllers\PengaturanKolomController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
})->name('home');

Route::controller(DataStatistikSektoralController::class)->prefix('/data_statistik_sektoral')->group(function(){
    Route::get('/', 'index')->name('dataStatistikSektoral');
    Route::get('/{kelompokDataSektoral}/detail', 'detail')->name('dataStatistikSektoral.detail');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(KelompokDataSektoralController::class)->middleware('auth')->prefix('/kelompok_data_sektoral')->group(function(){
    Route::get('/', 'index')->name('kelompokDataSektoral');
    Route::post('/', 'store')->name('kelompokDataSektoral.store');
    Route::get('/{kelompokDataSektoral}/edit', 'edit')->name('kelompokDataSektoral.edit');
    Route::patch('/update', 'update')->name('kelompokDataSektoral.update');
    Route::delete('/{kelompokDataSektoral}/delete', 'delete')->name('kelompokDataSektoral.delete');
    Route::get('/{kelompokDataSektoral}/download_pdf', 'downloadPdf')->name('kelompokDataSektoral.downloadPdf');
    Route::get('/{kelompokDataSektoral}/download_word', 'downloadWord')->name('kelompokDataSektoral.downloadWord');

    Route::controller(KelompokDetailController::class)->middleware('auth')->prefix('/kelompok_detail')->group(function(){
        Route::get('/{kelompokDataSektoral}/', 'index')->name('kelompokDetail');
        Route::post('/{kelompokDataSektoral}/', 'store')->name('kelompokDetail.store');
        Route::get('/{kelompokDetail}/edit', 'edit')->name('kelompokDetail.edit');
        Route::patch('/{kelompokDataSektoral}/update', 'update')->name('kelompokDetail.update');
        Route::delete('/{kelompokDataSektoral}/{kelompokDetail}/delete', 'delete')->name('kelompokDetail.delete');
    });
});

Route::controller(LuasWilayahDenganKetinggianTempatController::class)->middleware('auth')->prefix('/luas_wilayah_dengan_ketinggian_tempat')->group(function(){
    Route::get('/', 'index')->name('luasWilayahDenganKetinggianTempat');
    Route::post('/', 'store')->name('luasWilayahDenganKetinggianTempat.store');
    Route::get('/{data}/edit', 'edit')->name('luasWilayahDenganKetinggianTempat.edit');
    Route::patch('/update', 'update')->name('luasWilayahDenganKetinggianTempat.update');
    Route::delete('/{data}/delete', 'delete')->name('luasWilayahDenganKetinggianTempat.delete');
});

Route::controller(PengaturanKolomController::class)->middleware('auth')->prefix('/pengaturan_kolom')->group(function(){
    Route::get('/', 'index')->name('pengaturanKolom');
    Route::post('/', 'store')->name('pengaturanKolom.store');
    Route::get('/{pengaturanKolom}/edit', 'edit')->name('pengaturanKolom.edit');
    Route::patch('/update', 'update')->name('pengaturanKolom.update');
    Route::delete('/{pengaturanKolom}/delete', 'delete')->name('pengaturanKolom.delete');
});

Route::controller(KolomDataController::class)->middleware('auth')->prefix('/kolom_data')->group(function(){
    Route::get('/', 'index')->name('kolomData');
    Route::post('/', 'store')->name('kolomData.store');
    Route::get('/{kolomData}/edit', 'edit')->name('kolomData.edit');
    Route::patch('/update', 'update')->name('kolomData.update');
    Route::delete('/{kolomData}/delete', 'delete')->name('kolomData.delete');
});

require __DIR__.'/auth.php';
