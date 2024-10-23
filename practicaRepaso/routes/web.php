<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorMensaje;

// Route::view('/','inicio')->name('rutaInicio');
// Route::view('/','repaso1')->name('rutaRepaso1');
Route::get('/',[ControladorMensaje::class, 'home'])->name('rutaInicio');
Route::get('/repaso1',[ControladorMensaje::class, 'repaso1'])->name('rutaRepaso1');


Route::post('/enviarmensaje', [ControladorMensaje::class, 'convertidor'])->name('rutaConvertidor');
Route::post('/convertidor2', [ControladorMensaje::class, 'convertirGBaMB'])->name('rutaConvertidor2');
Route::post('/convertidor3', [ControladorMensaje::class, 'convertirGBaTB'])->name('rutaConvertidor3');
Route::post('/convertidor4', [ControladorMensaje::class, 'convertirTBaGB'])->name('rutaConvertidor4');
