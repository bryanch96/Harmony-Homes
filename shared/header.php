
<!DOCTYPE html>

</header>   
<?php 
    $url=basename($_SERVER["PHP_SELF"],".php");

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="descripcion" content="Rolando Sequeira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title>Mi Primer Sitio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/<?php echo $url ?>.css"/>
    <style>
        body {
            background-color: #f2b985b5;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        h2 {
            line-height: 1.2;
            margin-bottom: 10px;
        }
        h2 img {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 150px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-azul">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/Harmony_Homes_Logo-1.png" alt="Logo de la empresa" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="busquedas.php">Búsqueda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aunTeInteresa.php">Aún te interesa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Porque_elegirnos.php">Por qué elegirnos</a>
                        </li>
                        <li class="nav-item">
                            <a id = "nuestrasPropiedadesLink"class="nav-link" href="nuestras_propiedades.php">Nuestras propiedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonio.php">Testimonios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Detalles.php">Beneficios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="ProductoInmobiliario.php">Productos Inmobiliarios</a>
                
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Inmuebles.php">Inmuebles</a>
                        </li> 
                        
                        <li class="nav-item">
                            <a class="nav-link" href="Detallepropiedad.php">Detalles Propiedades</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Login.php">Login</a>
                        </li>
                        <h1 style="margin-left: 20px;"> <span id="nombreUsuario" style="font-size:0.7em"></span></h1>
                        
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    