<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuUmumController;
use App\Http\Controllers\TamuDinasController;
use App\Http\Controllers\TamuPengawasController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tamudinas', TamuDinasController::class); 
Route::resource('/tamupengawas', TamuPengawasController::class);
Route::resource('/tamuumum', TamuUmumController::class); 

