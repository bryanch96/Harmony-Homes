cargarTabla(); // VER ESTO


document.querySelector("#datosTabla").addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-outline-warning") ||
        e.target.classList.contains("fa-pencil")) {
        //console.log("modifcar")
        sessionStorage.setItem("id", e.target.closest("tr").childNodes[1].innerHTML)
        sessionStorage.setItem("nombre", e.target.closest("tr").childNodes[3].innerHTML)
        sessionStorage.setItem("Tipo", e.target.closest("tr").childNodes[5].innerHTML)
        sessionStorage.setItem("provincia", e.target.closest("tr").childNodes[7].innerHTML)
        sessionStorage.setItem("cuartos", e.target.closest("tr").childNodes[9].innerHTML)
        sessionStorage.setItem("precio", e.target.closest("tr").childNodes[11].innerHTML)
        sessionStorage.setItem("disponidilidad", e.target.closest("tr").childNodes[13].innerHTML)   
      
      
        location.href = "index.php?page=nuevopropiedad"

    } else if (e.target.classList.contains("btn-outline-danger") ||
        e.target.classList.contains("fa-trash")) {
        Swal.fire({
            title: "Esta seguro de eliminar esta película, datos  no se podrán recuperar",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Si",
            denyButtonText: `No`,
            icon:"warning"
        }).then((result) => {
            if (result.isConfirmed) {
                eliminar(e.target.closest("tr").childNodes[1].innerHTML);
                e.target.closest("tr").parent(e.target.closest("tr")).remove();
            } 
        });
    }


})
//consumir el api y obtener las peliculas de la base de datos
function cargarTabla() {
    //petición asincrona
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/todaspropiedades", //ocupo nombre api
        dataType: "JSON",
        success: function (res) {
            //console.log(res)
            let filas = "";
            res.forEach(p => {
                filas += crearFila(p)
            });
            //mostrar filas en la tabla
            $("#datosTabla").html(filas);
        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });

}
//NOMBRES .ID, .NOMBRE ETC DE LA  ESTRUCUTRA    BASE DE DATOS QUE CREO KARRME, TIENEN QUE SER LAS MISMAS

function crearFila(p) {
    return `    
        <tr>                                 
            <td scope="col">${p.id}</td>
            <td scope="col">${p.nombre}</td>
            <td scope="col">${p.tipo}</td>
            <td scope="col">${p.provincia}</td>
            <td scope="col">${p.cuartos}</td>
            <td scope="col">${p.precio}</td>
            <td scope="col">${p.disponidilidad}</td>
           
        
            
            <td scope="col">
            <button class="me-3 btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></button>
            <button class="me-3 btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
    
    `;
}

function eliminar(id) {
    const URL = `http://localhost:8080/eliminar/${id}`
    $.ajax({
        type: "delete",
        url: URL,
        success: function (res) {
            Swal.fire({
                title: "Mensaje",
                text: "Datos Eliminados Correctamente",
                icon: "success"
            })
        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });
}