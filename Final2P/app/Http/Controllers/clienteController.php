<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class clienteController extends Controller
{
    public function inicio ()
    {
       
        return view('incio'); 
    }

    public function Procesar( Request $peticion)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre|4carcter'),
            "correo"=>$request->input('txtcorreo|@gmail'),
            "telefono"=>$request->input('txttelefono|numeric'),
          
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaFrom');
           
    }
}
