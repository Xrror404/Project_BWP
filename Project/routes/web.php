<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PoinController;
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

Route::redirect('/', '/Login');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::prefix('/Login')->group(function () {
    Route::get('/', [LoginController::class, "ToLogin"])->name('login');
    Route::post('/Verification', [LoginController::class, 'AreUserExist'])->name('LoginForm');
});
Route::get('/Home', [HomeController::class, 'RedirectTo'])->name('home');

Route::get('/point',[PoinController::class,'RedirectTo'])->name('point');
Route::get('/info', function () {
    return view('info');
})->name('info');
Route::get('/laporan nilai', function () {
    return view('laporan');
})->name('laporan');
Route::get('/info', function () {
    return view('info');
})->name('info');
Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');
Route::get('/transkip', function () {
    return view('transkip');
})->name('transkip');
Route::get('/grafik', function () {
    return view('grafik');
})->name('grafik');
Route::get('/jadwal kuliah', function () {
    return view('jkuliah');
})->name('jkuliah');
Route::get('/jadwal ujian', function () {
    return view('jujian');
})->name('jujian');
Route::get('/jadwal dosen', function () {
    return view('jdosen');
})->name('jdosen');
Route::get('/batal tambah', function () {
    return view('batal');
})->name('batal');
Route::get('/pengisian FRS', function () {
    return view('frs');
})->name('frs');
Route::get('/drop', function () {
    return view('drop');
})->name('drop');
Route::get('/donwnload krs', function () {
    return view('krs');
})->name('krs');
Route::get('/TA/Tesis', function () {
    return view('ta');
})->name('ta');
