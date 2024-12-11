<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Prendas</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

{{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">

@foreach ($consultaclientes as $cliente)
            <div class="card text-justify font-monospace mt-4">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }}
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                    <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </div>

            @endforeach
        
        </div>
        {{-- Finaliza tarjetaCliente --}} 

        @endsection
  