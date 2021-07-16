<?php

use App\Http\Controllers\GuruController;
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
Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('adminLogin');
Route::post('login', [LoginController::class, 'login'])->name('adminLoginPost');
Route::post('logout', [LoginController::class, 'logout'])->name('adminLogout');

Route::prefix('dataGuru')->middleware('auth:admin')->group(function(){
    Route::get('', [GuruController::class, 'index'])->name('dataGuru');
    Route::get('create', [GuruController::class, 'create'])->name('dataGuru.create');
    Route::post('', [GuruController::class, 'store'])->name('dataGuru.store');
    Route::get('{guru}', [GuruController::class, 'show'])->name('dataGuru.show');
    Route::get('{guru}/edit', [GuruController::class, 'edit'])->name('dataGuru.edit');
    Route::put('{guru}', [GuruController::class, 'update'])->name('dataGuru.update');
    Route::delete('{guru}', [GuruController::class, 'destroy'])->name('dataGuru.destroy');
});


Route::get('/', function () {
    return view('admin.home');
})->middleware('auth:admin')->name('admin');
