<?php

use App\Http\Controllers\EjemploController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Hola';
});

Route::get("/mensaje",[EjemploController::class, "mensaje"]);

Route::resource("/productos",ProductoController::class);
