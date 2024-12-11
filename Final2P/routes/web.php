<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');

// rutas para clienteControlador
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaFrom');
Route::post('/cliente', [clienteController::class, 'store'])->name('rutaenviarCliente');
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaClientes');