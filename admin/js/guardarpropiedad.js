var ID = -1;

if(sessionStorage.getItem("id")!=null){
    $("#id").val(sessionStorage.getItem("id"));
    $("#nombre").val(sessionStorage.getItem("nombre"));
    $("#tipo").val(sessionStorage.getItem("tipo"));
    $("#provincia").val(sessionStorage.getItem("provincia"));
    $("#cuartos").val(sessionStorage.getItem("cuartos"));
    $("#precio").val(sessionStorage.getItem("precio"));
    $("#disponidilidad").val(sessionStorage.getItem("disponidilidad"));
    sessionStorage.clear();
    ID=1;
}



$("#guardar").click(function (e) { 
    //generar parametros
    let datos=$("#frmpropiedades").serialize(); // ver CUAL es frm, UTIIZAR EL ID DEL FORMULARIO
    console.log(datos);
    const accion= (ID==-1) ? "insertar" : "modificar";
    const petición= (ID==-1) ? "post":"put";
    peticionGuardar(accion,petición,datos);
});

function peticionGuardar(accion,petición,datos) {
    const URL=`http://localhost:8080/${accion}?${datos}`
    console.log(URL);
    $.ajax({
        type: petición,
        url: URL,
        success: function (res) {
            Swal.fire({
                title:"Mensaje",
                text:"Datos Guardados Correctamente",
                icon:"success"
            })

        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });
}