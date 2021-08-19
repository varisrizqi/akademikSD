<?php

use App\Http\Controllers\{GuruController, SiswaController, AdminController, KelasController, PelajaranController};
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

Route::prefix('dataSiswa')->middleware('auth:admin')->group(function(){
    Route::get('', [SiswaController::class, 'index'])->name('dataSiswa');
    Route::get('create', [SiswaController::class, 'create'])->name('dataSiswa.create');
    Route::post('', [SiswaController::class, 'store'])->name('dataSiswa.store');
    Route::get('{siswa}', [SiswaController::class, 'show'])->name('dataSiswa.show');
    Route::get('{siswa}/edit', [SiswaController::class, 'edit'])->name('dataSiswa.edit');
    Route::put('{siswa}', [SiswaController::class, 'update'])->name('dataSiswa.update');
    Route::delete('{siswa}', [SiswaController::class, 'destroy'])->name('dataSiswa.destroy');
});

Route::prefix('dataAdmin')->middleware('auth:admin')->group(function(){
    Route::get('', [AdminController::class, 'index'])->name('dataAdmin');
    Route::get('create', [AdminController::class, 'create'])->name('dataAdmin.create');
    Route::post('', [AdminController::class, 'store'])->name('dataAdmin.store');
    Route::get('{admin}', [AdminController::class, 'show'])->name('dataAdmin.show');
    Route::get('{admin}/edit', [AdminController::class, 'edit'])->name('dataAdmin.edit');
    Route::put('{admin}', [AdminController::class, 'update'])->name('dataAdmin.update');
    Route::delete('{admin}', [AdminController::class, 'destroy'])->name('dataAdmin.destroy');
});

Route::prefix('kelas')->middleware('auth:admin')->group(function(){
    Route::get('', [KelasController::class, 'index'])->name('kelas');
    Route::get('create', [KelasController::class, 'create'])->name('kelas.create');
    Route::post('', [KelasController::class, 'store'])->name('kelas.store');
    Route::get('{kelas}', [KelasController::class, 'show'])->name('kelas.show');
    Route::get('{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('{kelas}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');
});

Route::prefix('pelajaran')->middleware('auth:admin')->group(function(){
    Route::get('create/{kelas}', [PelajaranController::class, 'create'])->name('pelajaran.create');
    Route::post('store/{kelas}', [PelajaranController::class, 'store'])->name('pelajaran.store');
    Route::get('{pelajaran}/edit', [PelajaranController::class, 'edit'])->name('pelajaran.edit');
    Route::put('{pelajaran}', [PelajaranController::class, 'update'])->name('pelajaran.update');
    Route::delete('{pelajaran}', [PelajaranController::class, 'destroy'])->name('pelajaran.destroy');
});

Route::get('/', function () {
    return view('admin.home');
})->middleware('auth:admin')->name('admin');
