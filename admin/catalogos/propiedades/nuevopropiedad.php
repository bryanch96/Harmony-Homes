<!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
<form id="frmpropiedades" class="w-40 m-auto mx-5 my-5" action="" method="GET" enctype="multipart/form-data">
  
<!--
    ACA ESTA EL FRM PELICULA

-->
<input type="hidden" id="id" name="id">    
    <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php?page=propiedades" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Catálogo Propiedades
            </div>
               <!-- EL NAME DEBE SER EL MISMO DE LA TABLA Y ESTRUCTURA BASE DE DATOS-->
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo">
            <label for="tipo">Tipo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="provincia" id="provincia" placeholder="provincia">
            <label for="provincia">Provincia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cuartos" id="cuartos" placeholder="cuartos">
            <label for="cuartos">Habitaciones</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="precio" id="precio" placeholder="precio">
            <label for="precio">Precio</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="disponidilidad" id="disponidilidad" placeholder="disponidilidad">
            <label for="disponidilidad">disponibilidad</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Imagen</label>
        </div>

        <div class="mb-3">
            <button id="guardar" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelar" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>