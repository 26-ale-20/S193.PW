<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVitas extends Controller
{
    
    public function Principal()
    {
        return view('principal');
    }

    public function Registro()
    {
        return view('registro');
    }

    public function procesarLibro()
    {
        return 'Si llego la info del cliente :)';
    }

}
