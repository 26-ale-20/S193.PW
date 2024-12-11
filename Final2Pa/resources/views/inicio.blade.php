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
    <h1>Registro de prendas</h1>

    @if(session('exito'))
        <script>
            Swal.fire({
                title: "Respuesta del servidor!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <form action="{{ route('procesarcliente') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="txtnombre">
        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>

        <label>Correo:</label>
        <input type="text" name="txtcorreo">
        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>

        <label>telefono:</label>
        <input type="text" name="txttelefono">
        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>

        <button type="submit">Guardar cliente</button>
    </form>
</body>
</html>
