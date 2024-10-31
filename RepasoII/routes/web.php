<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVitas;

// Route::view('/','principal')->name('PaginaPrincipal');
// Route::view('/registro','registro')->name('PaginaRegistro');

Route::get('/',[ControladorVitas::class,'principal'])->name('PaginaPrincipal');
Route::get('/',[ControladorVitas::class,'registro'])->name('PaginaRegistro');

Route::post('/enviarLibro',[ControladorVitas::class,'procesarLibro'])->name('Libro');
