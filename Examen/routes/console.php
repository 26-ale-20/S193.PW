<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Controller\controladorVitas;

// Artisan::command('inspire', function () {
    // $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->hourly();

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');


