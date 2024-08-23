
$("#btnGuardar").click(function (e) { 
    
    // Generar parámetros
    let datos = $("#frmusuarios").serialize();
    console.log(datos);
    alert(datos);
    const accion = "insertarusuario";
    const metodo = "post";
    peticionGuardar(accion, metodo, datos);
});

// Función para realizar la petición AJAX
function peticionGuardar(accion, metodo, datos) {
    const URL=`http://localhost:8080/${accion}?${datos}`;

    console.log(URL);
    $.ajax({
        type: metodo,
        url: URL,
        success: function (res) {
            Swal.fire({
                title: "Mensaje",
                text: "Datos Guardados Correctamente",
                icon: "success"
            });
            // Redirigir al usuario después de guardar los datos
            e.preventDefault();
            location.href="login.php"
        }, 
        error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText);
            alert("Error al guardar los datos. Por favor, inténtalo de nuevo.");
        }, 
        complete: function () {
            console.log("Terminado");
        }
    });
}

