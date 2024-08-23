
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="casa, apartamentp, inversion">
    <title>Harmony Homes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/comunes.css">
</head>
<body>
<header>
<div class="video-fondo">
    <video autoplay loop muted>
      <source src="multimedia/Casas Video.mp4" type="video/mp4">
    </video>

<div id="video_overlay">Harmony Homes</div>

<div id="video_overlay2">make it reality</div>
   </div>
</header>   
<?php 
    $url=basename($_SERVER["PHP_SELF"],".php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="descripcion" content="Rolando Sequeira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title>Mi Primer Sitio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css"/>
    <style>
        body {
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
                            <a class="nav-link" href="nuestras_propiedades.php">Nuestras propiedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonio.php">Testimonios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Detalles.php">Beneficios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="inmuebles.php">Productos Inmobiliaria</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <h1 style="margin-left: 250px;"> <span id="nombreUsuario"></span></h1>
                        
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    </body>
<main>
    <section class="row justify-content-around ">   
        <h2 class="col-sm-12">Propiedades mas populares</h2>
        <p id="subtitulo">¡Bienvenido a nuestras propiedades más populares! Descubre las joyas más codiciadas en Harmony Homes.  
            Desde impresionantes fincas rurales hasta exclusivas residencias en la playa y elegantes apartamentos urbanos, 
            estamos aquí para hacer realidad tus sueños de hogar.</p>

        <div class="card col-md-8 col-lg-4" style="width: 20rem;">
          <div class="precio">$300,000</div>
            <img src="img/DJI_0002-400x284.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Finca Garabito</h5>
              <p class="card-text">Descubre tu propio paraíso rural en esta impresionante finca de 10 hectáreas.
                 Con terreno espacioso y abundante vegetación, 
                esta propiedad ofrece el entorno perfecto para criar y cuidar cabezas de ganado.
            </p>
            <div class="iconos_varios">
              <span id="icono_cochera">6|</span>
              <span id="icono_ducha">3|</span>
              <span id="icono_habitacion">6</span>
          </div>
            <p id="icono_ubicacion" style="color: rgba(115, 115, 115, 0.816)" >Finca| Guanacaste,Nicoya</p>
            
              <a href="Finca_garabito.php" class="informacion">Mas Detalles</a>
              <div class="contacto">
                <p style="color:rgba(115, 115, 115, 0.816)">Minor@gmail.com</p>
              <p style="color:rgba(115, 115, 115, 0.816)">Teléfono: +1 234 567 890</p>
              <p style="color:rgba(115, 115, 115, 0.816)">Minor@gmail.com</p>
            </div>

            <a href="Finca_garabito.php" class="qr">
              <img src="img/finca_garabito_qr.png" alt="Código QR de la propiedad">
          </a>

              
            </div> 
          </div>
          
    
          <div class="card col-md-6 col-lg-4" style="width: 20rem;">
            <div class="precio">$200,000</div>
            <img src="img/casa blanca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Casa Blanca</h5>
              <p class="card-text">Sumérgete en el lujo costero con esta exclusiva casa en la playa. 
                Con vistas panorámicas al mar y acceso privado a la playa de arena blanca, 
                esta propiedad ofrece un estilo de vida incomparable. 
            </p>
            <div class="iconos_varios">
              <span id="icono_cochera">2|</span>
              <span id="icono_ducha">3|</span>
              <span id="icono_habitacion">3</span>
          </div>
            <p id="icono_ubicacion" style="color: rgba(115, 115, 115, 0.816)">Casa| Puntarenas,Centro</p>
            

              <a href="casa_blanca.php" class="informacion">Mas Detalles</a>
              <div class="contacto">
                <p style="color:rgba(115, 115, 115, 0.816)">Minor@gmail.com</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Teléfono: +1 234 567 890</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Minor@gmail.com</p>
              </div>
              <a href="casa_blanca.php" class="qr">
                <img src="img/Casa blanca qr.png" alt="Código QR de la propiedad">
            </a>
  
            </div> 
          </div>    

          <div class="card col-md-6 col-lg-4" style="width: 20rem;">
            <div class="precio">$180,000</div>
            <img src="img/alta vista.jfif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Torre Alta Vista</h5>
              <p class="card-text">Descubre el equilibrio perfecto entre elegancia urbana y comodidad contemporánea 
                en esta exclusiva casa en el corazón de la ciudad. Ubicada en un edificio emblemático con una vista 
                panorámica impresionante, esta propiedad redefine el concepto de vida urbana.
            </p>
            <div class="iconos_varios">
              <span id="icono_cochera">1|</span>
              <span id="icono_ducha">2|</span>
              <span id="icono_habitacion">2</span>
          </div>
            <p id="icono_ubicacion" style="color: rgba(115, 115, 115, 0.816)">Casa| San Jose,Sabana</p>
           

              <a href="torre_alta_vista.php" class="informacion">Mas Detalles</a>
              <div class="contacto">
                <p style="color:rgba(115, 115, 115, 0.816)">Minor@gmail.com</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Teléfono: +1 234 567 890</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Minor@gmail.com</p>
              </div>
              <a href="torre_alta_vista.php" class="qr">
                <img src="img/Torre alta vista qr.png" alt="Código QR de la propiedad">
            </a>
            </div> 
          </div> 

    </section>

    <section class="row justify-content-evenly ">   
        <h2 class="col-sm-12">Propiedes en Remate</h2>
        <p id="subtitulo">¡Descubre nuestras propiedades en remate! Encuentra oportunidades únicas de inversión en Harmony Homes. 
            Explora una selección especial de propiedades a precios increíbles.</p>
            

        <div class="card col-md-6 col-lg-4" style="width: 18rem;">
          <div class="precio">$160,000</div>
            <img src="img/Condominio gregal.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Casa Hacienda Gregal</h5>
              <p class="card-text">Descubre la serenidad y el confort en esta casa exquisitamente ubicada dentro de un condominio de belleza incomparable. 
                ¡Tu hogar ideal te espera entre jardines cuidados y una atmósfera de tranquilidad!"
            </p>
            <div class="iconos_varios">
              <span id="icono_cochera">2|</span>
              <span id="icono_ducha">2|</span>
              <span id="icono_habitacion">3</span>
          </div>
            <p id="icono_ubicacion" style="color: rgba(115, 115, 115, 0.816)">Casa| Curridabat, Tres Rios</p>
           

              <a href="casa_hacienda-gregal.php" class="informacion">Mas Detalles</a>
              <div class="contacto">
                <p style="color:rgba(115, 115, 115, 0.816)">jose@gmail.com</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Teléfono: +1 234 567 890</p>
                <p style="color:rgba(115, 115, 115, 0.816)">jose@gmail.com</p>
              </div>
              <a href="casa_hacienda-gregal.php" class="qr">
                <img src="img/casa hacienda gregal qr.png" alt="Código QR de la propiedad">
            </a>
            </div> 
          </div>
    
          <div class="card col-md-6 col-lg-4" style="width: 18rem;">
            <div class="precio">$100,000</div>
            <img src="img/casa esperanza.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Casa Esperanza</h5>
              <p class="card-text">Explora una vida de serenidad y espacio en esta encantadora casa situada fuera de la ciudad. 
                Disfruta de la paz y la privacidad mientras te sumerges en la belleza natural que rodea tu nuevo hogar
            </p>
            <div class="iconos_varios">
              <span id="icono_cochera">2|</span>
              <span id="icono_ducha">1.5|</span>
              <span id="icono_habitacion">3</span>
          </div>
            <p id="icono_ubicacion" style="color: rgba(115, 115, 115, 0.816)">Casa| Cartago, Tierra Blanca</p>
            

              <a href="casa_esperanza.php" class="informacion">Mas Detalles</a>
              <div class="contacto">
                <p style="color:rgba(115, 115, 115, 0.816)">karreme@gmail.com</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Teléfono: +1 234 567 890</p>
                <p style="color:rgba(115, 115, 115, 0.816)">karreme@gmail.com</p>
              </div>
              <a href="casa_esperanza.php" class="qr">
                <img src="img/casa esperanza qr.png" alt="Código QR de la propiedad">
            </a>
            </div> 
          </div>    

          <div class="card col-md-6 col-lg-4" style="width: 18rem;">
            <div class="precio">$220,000</div>
            <img src="img/casa tamarindojpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Casa Miramar</h5>
              <p class="card-text">¡Haz realidad tus sueños de vivir 
                junto al mar en esta hermosa casa en la playa! Disfruta de impresionantes vistas al océano.
            </p>
            <div class="iconos_varios">
              <span id="icono_cochera">3|</span>
              <span id="icono_ducha">3|</span>
              <span id="icono_habitacion">4</span>
          </div>
            <p id="icono_ubicacion" style="color: rgba(115, 115, 115, 0.816)">Casa|Guanacaste,Tamarindo</p>
            

              <a href="casa_miramar.php" class="informacion">Mas Detalles</a>
              <div class="contacto">
                <p style="color:rgba(115, 115, 115, 0.816)">Bryan@gmail.com</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Teléfono: +1 234 567 890</p>
                <p style="color:rgba(115, 115, 115, 0.816)">Bryan@gmail.com</p>
              </div>
              <a href="casa_miramar.php" class="qr">
                <img src="img/casa miramar qr.png" alt="Código QR de la propiedad">
            </a>
            </div> 
          </div>   


    </section>




</main>
</body>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Recuperar el nombre del usuario del localStorage
        var nombreUsuario = localStorage.getItem('usuario');
        // Mostrar el nombre del usuario en el header
        document.getElementById('nombreUsuario').innerText = nombreUsuario;
    </script>

</html> 


<?php include "shared/footer.php" ?>
    