


<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmusuarios" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">

<!--
    ACA ESTA EL FRM PELICULA

-->
<input type="hidden" id="id" name="id">    
    <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php?page=usuario" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Catálogo Usuarios
            </div>
               <!-- EL NAME DEBE SER EL MISMO DE LA TABLA Y ESTRUCTURA BASE DE DATOS-->
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido">
            <label for="apellido">Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="numero" id="numero" placeholder="numero">
            <label for="numero">Numero</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="whatsapp">
            <label for="whatsapp">whatsapp</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="correo" id="correo" placeholder="correo">
            <label for="correo">Correo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cumpleanios" id="cumpleanios" placeholder="cumpleanios">
            <label for="cumpleanios">Cumpleanos</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
            <label for="usuario">Usuario</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="contrasenia" id="contrasenia" placeholder="contrasenia">
            <label for="contrasenia">Contrasena</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="rango" id="rango" placeholder="rango">
            <label for="rango">Rango</label>
        </div>

       
        

        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>