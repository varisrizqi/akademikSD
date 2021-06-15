<?php

use App\Http\Controllers\Login\SiswaLogin\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index'])->name('siswaLogin');
Route::post('login', [LoginController::class, 'login'])->name('siswaLoginPost');
Route::post('logout', [LoginController::class, 'logout'])->name('siswaLogout');

Route::get('/', function () {
    return view('home');
})->middleware('auth:siswa')->name('siswa');