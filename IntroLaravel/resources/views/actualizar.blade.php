@extends('layouts.plantilla')

@section('contenido')
<div class="container mt-5 col-md-8">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">Actualizar Cliente</div>
        <div class="card-body text-justify">
            <form action="{{ route('rutaActualizar2', $cliente->id) }}" method="POST" onsubmit="return confirmaciondeactualizacion()">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">{{ __('Nombre') }}:</label>
                    <input type="text" class="form-control" id="nombre" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}" required>
                    @error('txtnombre')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">{{ __('Apellidos') }}:</label>
                    <input type="text" class="form-control" id="apellido" name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}" required>
                    @error('txtapellido')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">{{ __('Correo') }}:</label>
                    <input type="email" class="form-control" id="correo" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}" required>
                    @error('txtcorreo')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">{{ __('Teléfono') }}:</label>
                    <input type="text" class="form-control" id="telefono" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}" required>
                    @error('txttelefono')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <a href="{{ route('rutaClientes') }}" class="btn btn-primary">{{ __('Cancelar') }}</a>
                        <button type="submit" class="btn btn-success btn-sm">{{ __('Actualizar') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmaciondeactualizacion() {
        return confirm('¿Quieres realizar los cambios hechos?');
    }
</script>
@endsection
