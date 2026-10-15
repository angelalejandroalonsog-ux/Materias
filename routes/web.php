<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('informacion-personal', InformacionPersonalController::class);
Route::resource('materia', MateriaController::class);