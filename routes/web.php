<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TamuUmumController;
use App\Http\Controllers\TamuDinasController;
use App\Http\Controllers\ArsipSuratController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\TamuPengawasController;
use App\Http\Controllers\PengirimSuratController;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');
Route::get('/admin', [AuthController::class, 'getAdmin'])->name('admin');


Route::resource('/tamudinas', TamuDinasController::class);
Route::resource('/tamupengawas', TamuPengawasController::class);
Route::resource('/tamuumum', TamuUmumController::class);
Route::resource('/departemen', DepartemenController::class);
Route::resource('/pengirim_surat', PengirimSuratController::class);
Route::resource('/arsip_surat', ArsipSuratController::class);
Route::resource('/user', UserController::class);
// Route::resource('/admin', AuthController::class);
