<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorRopa;


Route::get('/', [ControladorRopa::class, 'inicio'])->name('rutaInicio');
Route::post('/procesar', [ControladorRopa::class, 'procesar'])->name('procesarropa');
