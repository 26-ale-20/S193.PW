<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ControladorVistas extends Controller
{
    public function index()
    {
       
        return view('cliente',compact('consultaclientes')); 
    }

    public function store(validadorCliente $request)
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
