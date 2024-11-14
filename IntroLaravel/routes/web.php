<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;


// Route::get('/', function () {
//     return view('inicio');
// })->name('rutaInicio');

// Route::get('/from', function () {
//     return view('formulario');
// })->name('rutaFrom');

// Route::get('/consultar', function () {
//     return view('cliente');
// })->name('rutaClientes');

/* Route::view('/','inicio')->name('rutaInicio');
Route::view('/from','formulario')->name('rutaFrom');
Route::view('/consultar','cliente')->name('rutaClientes'); */

// Route::view('/component','componentes')->name('rutacomponent'); 

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');


Route::get('/consultar', [ControladorVistas::class, 'consulta'])->name('rutaClientes');


Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

// rutas para clienteControlador
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaFrom');
