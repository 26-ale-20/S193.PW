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

    public function procesarLibro(Request $peticion)
    {
        $titulo = $peticion->input('txttitulo');
        session()->flash('exito', 'Se guardó el Libro: ' . $titulo);
        return to_route('rutaRegistrolibros');
    }

}
