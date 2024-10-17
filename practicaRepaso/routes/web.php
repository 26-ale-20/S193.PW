<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorMensaje;

// Route::view('/','inicio')->name('rutaInicio');
// Route::view('/','repaso1')->name('rutaRepaso1');

Route::get('/',[ControladorMensaje::class, 'home'])->name('rutaInicio');
Route::get('/repaso1',[ControladorMensaje::class, 'repaso1'])->name('rutaRepaso1');
Route::post('/mensaje',[ControladorMensaje::class, 'mensaje'])->name('rutamensaje');

