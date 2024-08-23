<?php include "shared/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <main>
        <div class="register-container">
            <section class="register">
                <h2>Register</h2>
                <form id="frmusuarios" action="" method="GET" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido" required>
                        <label for="apellido">Apellido</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="email" required>
                        <label for="correo">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="cumpleanios" id="cumpleanios" required>
                        <label for="cumpleanios">Cumpleaños</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="numero" id="numero" placeholder="telefono" required>
                        <label for="numero">Telefono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="whatsapp" id="whatsapp" placeholder="whatsapp" required>
                        <label for="whatsapp">WhatsApp</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario" required>
                        <label for="usuario">usuario</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="contrasenia" required>
                        <label for="contrasenia">Contrasenia</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="confirmarcontrasena" id="confirmarcontrasena" placeholder="confirmarcontrasena" required>
                        <label for="confirmarcontrasena">Confirmar Contraseña</label>
                    </div>
                    <button type="submit" id= "btnGuardar" class="btn btn-primary">Register</button>
                </form>
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </section>
        </div>
    </main>
    <script src="js/register.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 </script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>
<?php include "shared/footer.php" ?>