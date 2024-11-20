@extends('layouts.plantilla')
@section('contenido')
<div class="container mt-5 col-md-8">
        
        @foreach ($consultaclientes as $cliente)
        <div class="card font-monospace">

        
   <div class="card-header fs-5 text-center text-primary">Actualzar de Clientes</div>
   <div class="card-body text-justify">

    <form action="{{route('rutaActualizar2')}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('nombre')}}</small>
        </div>

        <div class="mb-3">
        <label for="nombre" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('apellido')}}</small>
        </div>

        <div class="mb-3">
        <label for="nombre" class="form-label">Correo:</label>
            <input type="text" class="form-control" id="correo" name="correo" value="{{ $cliente->correo }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('correo')}}</small>
        </div>

        <div class="mb-3">
        <label for="nombre" class="form-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
            <small class="text-danger fst-italic">{{ $errors->first('telefono')}}</small>
        </div>

        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
            <a href="{{ route('rutaClientes') }}" class="btn btn-primary">Cancelar</a> 
            <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
            </div>

        </div>
    </form>

</div>
</div>
</div>
        @endforeach
        
    </div>
@endsection