<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function Procesar( Request $peticion)
    {
        $validacion = $peticion->validate([
            'txtprenda' => 'required', 
            'txtcolor' => 'required', 
            'txtcantidad' => 'required|numeric'
        ]);

        $prenda = $peticion->input('txtprenda');
        $color = $peticion->input('txtcolor');
        session()->flash('exito', 'Se guardó la prenda: ' .$prenda.$color);
        return to_route('rutaInicio');

    }
}