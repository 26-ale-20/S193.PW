<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * aqui vamos a utilizar del CRUD 
     */
    public function index()
    {
       $consultaclientes= DB::table('clientes')->get();
        return view('cliente',compact('consultaclientes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('formulario'); 
    
    }

    /**
     * SAqui me aviento el insert 
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaFrom');
           
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();

        return view('actualizar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        DB::table('clientes')->where('id', $id)->update ([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at" => Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('exito', 'Se actualizó el usuario: ' . $usuario);

        return to_route('rutaClientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();
        session()->flash('exito', 'Fue eliminado correctamente');
        return to_route ('rutaClientes');
    }
}
