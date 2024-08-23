<?php include "shared/header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="casa, apartamentp, inversion">
    <title>Harmony Homes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Contactenos.css">
    <!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>

<?php
// Definir variables y establecer valores predeterminados
error_reporting(0);
$nombre = $email = $mensaje = "";
$nombreErr = $emailErr = $mensajeErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar nombre
    if (empty($_POST["nombre"])) {
        $nombreErr = "Nombre es requerido";
    } else {
        $nombre = test_input($_POST["nombre"]);
    }

    // Validar email
    if (empty($_POST["email"])) {
        $emailErr = "Email es requerido";
    } else {
        $email = test_input($_POST["email"]);
        // Verificar si el formato del email es válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email inválido";
        }
    }

    // Validar mensaje
    if (empty($_POST["mensaje"])) {
        $mensajeErr = "Mensaje es requerido";
    } else {
        $mensaje = test_input($_POST["mensaje"]);
    }

    // Si no hay errores, enviar el correo
    if (empty($nombreErr) && empty($emailErr) && empty($mensajeErr)) {
        $to = "tucorreo@ejemplo.com"; // Cambia esto con tu dirección de correo
        $subject = "Nuevo mensaje de contacto";
        $message = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
        $headers = "From: $email";

        // Enviar correo Conectar a la base
        mail($to, $subject, $message, $headers);
        echo "<script>alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');</script>";
        
        // Limpiar los campos después de enviar el formulario
        $nombre = $email = $mensaje = "";
    }
}

// Función para limpiar los datos de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Formulario de Contacto</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>">
    <span style="color: red;"><?php echo $nombreErr;?></span>
    <br><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email;?>">
    <span style="color: red;"><?php echo $emailErr;?></span>
    <br><br>

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" rows="5" cols="40"><?php echo $mensaje;?></textarea>
    <span style="color: red;"><?php echo $mensajeErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Enviar">
</form>
<script src="script.js"></script>

</body>
</html>

<div id="espacioabajo"></div>

    <?php include "shared/footer.php"?>
    
