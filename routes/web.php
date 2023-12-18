<?php

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
Route::get('/dataset', function () {
    return view('dataset');
})->name('dataset');
Route::get('/organisation', function () {
    return view('organisation');
})->name('organisation');
Route::get('/organisation_detail', function () {
    return view('organisation_detail');
})->name('organisation_detail');
Route::get('/group', function () {
    return view('group');
})->name('group');
Route::get('/showcase', function () {
    return view('showcase');
})->name('showcase');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/dataset_detail', function () {
    return view('dataset_detail');
})->name('dataset_detail');
