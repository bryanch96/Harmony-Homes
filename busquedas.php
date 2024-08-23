
<?php include "shared/header.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="casa, apartamento, inversion">
    <title>Búsqueda de Propiedades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/busqueda.css">
    <script src="js/busquedas.js"></script>
</head>

<body>
    <main class="main_busquedas">
        <div id="espacioArriba"></div>
        
        <div class="col-md-4" id="cuadroBusqueda">
            <div class="mb-3">
                <label for="tipoPropiedad">Tipo de propiedad</label>
                <select id="tipoPropiedad" name="tipoPropiedad" class="form-select">
                    <option value="">Selecciona</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="provincia">Provincias</label>
                <select id="provincia" name="provincia" class="form-select">
                    <option value="">Selecciona</option>
                    <option value="San José">San José</option>
                    <option value="Guanacaste">Guanacaste</option>
                    <option value="Puntarenas">Puntarenas</option>
                    <option value="Heredia">Heredia</option>
                    <option value="Alajuela">Alajuela</option>
                    <option value="Cartago">Cartago</option>
                    <option value="Limón">Limón</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="precioMax">Precio máximo:</label>
                <input type="text" id="precioMax">
                <label for="precioMin">Precio mínimo:</label>
                <input type="text" id="precioMin">
            </div>
            <div class="mb-3">
                <label for="numCuartos">Número de cuartos</label>
                <input type="text" id="numCuartos">
            </div>
            <div class="mb-3">
                <button class="btn btn-rojo" id="btnBuscar">Buscar</button>
            </div>
        </div>
        <div id="espacioAbajo"></div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 </script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>

        <?php include "shared/footer.php" ?>