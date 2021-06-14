<?php

use App\Http\Controllers\Login\AdminLogin\LoginController;
use Illuminate\Support\Facades\Auth;
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
Route::get('login', [LoginController::class, 'index'])->name('adminLogin');
Route::post('login', [LoginController::class, 'login'])->name('adminLoginPost');
Route::post('logout', [LoginController::class, 'logout'])->name('adminLogout');


Route::get('/', function () {
    return view('home');
})->name('admin');
