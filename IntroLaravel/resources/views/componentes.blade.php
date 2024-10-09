
@extends('layouts.plantilla')

@section('titulo', 'Componentes Blade')

@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar"> 
    Spy el contenido del primero 
</x-Card>

<x-Card encabezado="Componente2" titulo="Dinamico2" textoBoton=" NO Guardar2" > 
   Otro gatoooo!!!!
</x-Card>



@endsection 