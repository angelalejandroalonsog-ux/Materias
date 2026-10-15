<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

Route::resource('materia', MateriaController::class);
