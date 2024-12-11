<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorcliente;



Route::get('/', [Controladorcliente::class, 'inicio'])->name('rutaInicio');
Route::post('/procesar', [Controladorcliente::class, 'procesar'])->name('procesarropa');
