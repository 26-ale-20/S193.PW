<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladorcliente extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function procesar(Request $peticion)
    {
        $validacion = $peticion->validate([
            'txtnombre' => 'required',
            'txtcorreo' => 'required',
            'txttelefono' => 'required|numeric',
        ]);

        $prenda = $peticion->input('txtnombre');
        $color = $peticion->input('txtcorreo');
        session()->flash('exito', 'Se guardó el cliente: ' . $prenda . ' ' . $color);
        return to_route('rutaInicio');
    }
}
