@extends('layouts.plantilla')

@section('contenido')

<!-- Verificar si existe un mensaje de éxito en la sesión -->
@if(session('exito'))
    <script> 
        Swal.fire({
            title: "Acción completada",
            text: "{{ session('exito') }}",
            icon: "success",
            confirmButtonText: "Aceptar"
        });
    </script>
@endif

<div class="container mt-5 col-md-8">
   
    @foreach ($consultaclientes as $cliente)
        <div class="card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
            </div>
            <div class="card-footer text-muted">
              
                <a href="{{ route('rutaActualizar', $cliente->id) }}" class="btn btn-primary">Actualizar</a>
            
                <form action="{{ route('rutaEliminarCliente', $cliente->id) }}" method="POST" style="display:inline;" onsubmit="return confirmarEliminacion()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                </form>
            </div>
        </div>
    @endforeach
</div>


<script>
    function confirmarEliminacion() {
        return confirm('¿Estás seguro de que deseas eliminar este cliente?');
    }
</script>

@endsection
