<?php

use App\Http\Controllers\DataWilayahController;
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

Route::get('/data_statistik_sektoral', function () {
    return view('dataset');
})->name('dataset');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->controller(DataWilayahController::class)->prefix('data_wilayah')->group(function () {
    Route::get('/', 'index')->name('dataWilayah');
    Route::get('/create', 'create')->name('dataWilayah.create');
    Route::post('/', 'store')->name('dataWilayah.store');
    Route::get('/{dataWilayah}/edit', 'edit')->name('dataWilayah.edit');
    Route::patch('//update', 'update')->name('dataWilayah.update');
    Route::delete('/{dataWilayah}/delete', 'delete')->name('dataWilayah.delete');
});

require __DIR__.'/auth.php';
