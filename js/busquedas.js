

document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al botón de búsqueda
    var btnBuscar = document.getElementById('btnBuscar');

    // Agregar un evento de clic al botón de búsqueda
    btnBuscar.addEventListener('click', function() {
        // Obtener los valores de los campos de búsqueda
        sessionStorage.setItem("precioMax", $("#precioMax").val());
        sessionStorage.setItem("precioMin", $("#precioMin").val());
        sessionStorage.setItem("provincia", $("#provincia").val());
        sessionStorage.setItem("numCuartos", $("#numCuartos").val());
        sessionStorage.setItem("tipoPropiedad", $("#tipoPropiedad").val());
        location.href="Inmuebles.php"
 
    });
});
