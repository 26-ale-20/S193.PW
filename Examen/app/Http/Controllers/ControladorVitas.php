<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVitas extends Controller
{

    public function consulta()
    {
        return view('cliente'); 
    }

    public function Registro(RegistroPrenda $peticion)
    {
       
    $validacion= $peticion->validate([
        'txtnombreprenda'=> 'required|min:4 |max:20 ',
        'txtcolor'=> 'required',
        'txtcantidad'=> 'required|numeric'
      ]);

    $usuario= $peticion->input('txtnombredeprenda');
    session()->flash('exito','Se guardo la prenda: '.$usuario);
    return to_route('rutaFrom');
       
    }


}
