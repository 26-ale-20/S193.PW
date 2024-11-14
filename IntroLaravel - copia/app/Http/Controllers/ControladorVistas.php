<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

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

    public function procesarCliente(validadorCliente $peticion)
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

    //se guarda en una variable para darle un valor a la peticion validate que comprueba las condiciones 


    //comprueba que exista el required 
    $validacion= $peticion->validate([
        'txtnombre'=> 'required|min:4 |max:20 ',
        'txtapellido'=> 'required',
        'txtcorreo'=> 'required',
        'txttelefono'=> 'required|numeric'
      ]);


    //redireccion con un mensaje flash en sesion 
    $usuario= $peticion->input('txtnombre');
    session()->flash('exito','Se guardo el usuario: '.$usuario);
    return to_route('rutaFrom');
       
    }


}
