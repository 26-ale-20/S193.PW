<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

// Route::view('/','principal')->name('PaginaPrincipal');
// Route::view('/registro','registro')->name('PaginaRegistro');

Route::get('/',[ControladorVista::class,'Principal'])->name('rutaPrincipal');
Route::get('/resgistro',[ControladorVista::class,'Registro'])->name('rutaRegistrolibros');

Route::post('/enviarLibro',[ControladorVista::class,'procesarLibro'])->name('rutaLibro');
