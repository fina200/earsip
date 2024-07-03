<?php

use App\Http\Controllers\TamuDinasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tamudinas', TamuDinasController::class); 
