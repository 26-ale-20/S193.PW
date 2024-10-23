<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso 1</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="container mt-5 col-md-6">

<h1>Convertidor</h1>

<form action="/enviarmensaje" method="POST">
    
    <!-- @csrf permite que se envie la informacion, es como clave del POST -->
            @csrf 
            <label for="valor">Convertidor de MB a GB:</label>
            <input type="number" name="valor" placeholder="Ingresa el numero" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
        </form>

        <form action="convertidor2" method="POST">
            @csrf
            <label for="valor">Convertidor de GB a MB:</label>
            <input type="number" name="valor" placeholder="Ingresa el numero" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
        </form>

        <form action="/convertidor3" method="POST">
            @csrf
            <label for="valor">Convertidor de GB a TB:</label>
            <input type="number" name="valor" placeholder="Ingresa el numero" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
        </form>

        <form action="convertidor4" method="POST">
            @csrf
            <label for="valor">Convertidor de TB a GB:</label>
            <input type="number" name="valor" placeholder="Ingresa el numero" required> 
            <button type="submit" class="btn btn-success btn-sm">Convertir</button>
        </form>
     </div>
</body>
</html>