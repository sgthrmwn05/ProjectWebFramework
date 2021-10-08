<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/schedule', function () {
    return view('schedule', [
        "title" => "Daftar Penyewaan"
    ]);
});

Route::get('/book', function () {
    return view('book', [
        "title" => "Tambah Sewa"
    ]);
});

Route::get('/recap', function () {
    return view('recap', [
        "title" => "Rekapitulasi"
    ]);
});
