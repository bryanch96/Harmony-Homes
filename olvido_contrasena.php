
<?php include "shared/header.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvidé mi contraseña</title>
    <link rel="stylesheet" href="css/olvido_contrasena.css">
</head>
<body>
    <h1>Olvidé mi contraseña</h1>
    <form action="enviar.php" method="post">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Enviar</button>
    </form>
    <script src="script.js"></script>
</body>
</html>


<?php include "shared/footer.php" ?>