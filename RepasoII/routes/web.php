<?php

use Illuminate\Support\Facades\Route;

Route::view('/','principal')->name('PaginaPrincipal');
Route::view('/resgistro','registrolibros')->name('PaginaRegistrolibros');
