<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    Route::get('/', [LoginController::class, "ToLogin"]);
    Route::post('/Verification', [LoginController::class, 'AreUserExist'])->name('LoginForm');
});
Route::get('/Home', [HomeController::class, 'index'])->name('home');
