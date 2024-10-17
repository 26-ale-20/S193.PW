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
        
        <form action="/mensaje" method="POST">>
         @csrf
         <label for="valor">Ingresa el valor:</label>
         <input type="number" id="" placeholder="Ingresa el valor"> 
         
         <select class="form-select" size="3" aria-label="Size 3 select example">
             <option selected>Selecciona la unidad:</option>
             <option value="MBAGB">MB a GB</option>
             <option value="GBAMB">GB a MB</option>
             <option value="GBATB">GB a TB</option>
             <option value="TBAGB">TB a GB</option>
           </select>
           <button type="submit" class="btn btn-success btn-sm">Convertir</button>
           
         </form>
     </div>
</body>
</html>