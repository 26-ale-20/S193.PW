<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladoVistas extends Controller
{
    public function inicio()
    {
        return view('inicio'); 
    }

    public function procesar (Request $peticion)
    {
        $validacion = $peticion->validate([
            "nombre"=>$request->input('txtnombree'),
            "nombre"=>$request->input('txtnombre'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
    
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaFrom');
           
    }
}