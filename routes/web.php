
<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materia', MateriaController::class)
    ->parameters(['materia' => 'materia']);