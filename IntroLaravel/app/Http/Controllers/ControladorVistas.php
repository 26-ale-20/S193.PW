<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    /* usamos este controlador para administrar lalogica de las vistas */
    
    public function home()
    {
       return view('inicio'); 
    }

    public function formulario()
    {
        return view('formulario'); 
    }

    public function consulta()
    {
        return view('cliente'); 
    }

    public function procesarCliente(Request $peticion)
    {
       // respuesta de redireccion 

       // redireccion usando la ruta

    //    return redirect('/');
    //    return redirect()->route('rutaClientes');

       //Rredireccion al origen de la peticion
    //    return back();

    //redireccion con variables adjunta 
    // $id= [['usuario'=>1],['usuario'=>2]];
    // return view('formulario',compact('id'));

    //redireccion con un mensaje flash en sesion 
    $usuario= $peticion->input('txtnombre');
    session()->flash('exito','Se guardo el usuario: '.$usuario);
    return to_route('rutaFrom');
       
    }


}
