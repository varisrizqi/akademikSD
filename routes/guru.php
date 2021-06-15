<?php

use App\Http\Controllers\Login\GuruLogin\LoginContoller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginContoller::class, 'index'])->name('guruLogin');
Route::post('login', [LoginController::class, 'login'])->name('guruLoginPost');
Route::post('logout', [LoginController::class, 'logout'])->name('guruLogout');


Route::get('/', function () {
    return view('home');
})->middleware('auth:guru')->name('admin');

