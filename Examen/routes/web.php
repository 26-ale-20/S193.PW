<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controller\controladorVitas;

Route::get('/', function () {
    return view('welcome');
});
