<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezamen 2 </title>
</head>
<body>
    <h1> Registro de prendas </h1>

  
    <div class="mb-3">
                        <label for="nombre de prenda" class="form-label">Nombre de prenda :</label>
                        <input type="text" class="form-control" name="txtnombredeprenda" value="{{old('txtnombredeprenda')}}">
                    </div>

                    <div class="mb-3">
                        <label for="color de la prenda" class="form-label">Color de prenda </label>
                        <input type="text" class="form-control" name="txtcolordeprenda" value="{{old('txtcolordeprenda')}}">
                      
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="numer" class="form-control" name="" value=" {{old('')}}">
                    </div>

                    


</body>
</html>