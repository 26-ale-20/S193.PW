<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">{{__('Practica RepasoII')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('PaginaPrincipal') ? 'text-warning' : '' }}" href="{{ route('rutaPrincipal') }}">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('PaginaRegistro') ? 'text-warning' : '' }}" href="{{ route('rutaRegistrolibros') }}">Registro de libros</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @yield('contenido')
</body>
</html>