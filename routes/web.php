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
})->name('home');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.store');
Route::post('/logout', [AuthController::class, 'postLogout'])->name('logout');
Route::get('/admin', [AuthController::class, 'getAdmin'])->name('admin')->middleware('admin');


Route::get('/tamudinas/{id}/edit', [TamuDinasController::class, 'edit'])->middleware('admin');
Route::resource('/tamudinas', TamuDinasController::class);

Route::get('/tamupengawas/{id}/edit', [TamuPengawasController::class, 'edit'])->middleware('admin');
Route::resource('/tamupengawas', TamuPengawasController::class);

Route::get('/tamuumum/{id}/edit', [TamuUmumController::class, 'edit'])->middleware('admin');
Route::resource('/tamuumum', TamuUmumController::class);

Route::resource('/departemen', DepartemenController::class)->middleware('admin');
Route::resource('/pengirim_surat', PengirimSuratController::class)->middleware('admin');
Route::resource('/arsip_surat', ArsipSuratController::class)->middleware('admin');
Route::get('/arsip_surat', [ArsipSuratController::class, 'index'])->name('homelogin')->middleware('auth');

Route::get('surat/{file}', [ArsipSuratController::class, 'downloadSurat'])->middleware('auth');

Route::resource('/user', UserController::class)->middleware('admin');
// Route::resource('/admin', AuthController::class);
