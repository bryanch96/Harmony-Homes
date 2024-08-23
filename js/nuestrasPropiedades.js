cargarTabla(); // VER ESTO

//consumir el api y obtener las peliculas de la base de datos
function cargarTabla() {
    //petición asincrona
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/todaspropiedades", //ocupo nombre api
        dataType: "JSON",
        success: function (res) {1
            console.log(res)
            if(res.length==0){
                $("#noRes").css("display", "block");
            }else{
                cargarResultados(res);
            }
          
        }, error: function (xhr) {
            console.log(xhr.statusText + xhr.responseText)
        }, complete: function () {
            console.log("Terminado")
        }
    });

}
//NOMBRES .ID, .NOMBRE ETC DE LA  ESTRUCUTRA    BASE DE DATOS QUE CREO KARRME, TIENEN QUE SER LAS MISMAS

//NUESTRA PTOPIEDADES.JS

//NOMBRES .ID, .NOMBRE ETC DE LA  ESTRUCUTRA    BASE DE DATOS QUE CREO KARRME, TIENEN QUE SER LAS MISMAS

function cargarResultados(res){
    cartas="";
    res.forEach(p => {
        let imageUrl = "img/condominio gregal.jpg"; 

        if (p.nombre.toLowerCase() === "casa blanca") { 
            imageUrl = "img/casa blanca.jpg";
        } else if (p.nombre.toLowerCase() === "alta vista") {
            imageUrl = "img/alta vista.jfif";
        } else if (p.nombre.toLowerCase() === "casa esperanza") {
            imageUrl = "img/casa esperanza.jpg";
        } else if (p.nombre.toLowerCase() === "condominio gregal") {
            imageUrl = "img/condominio gregal.jpg";
        } else if (p.nombre.toLowerCase() === "casa sol") {
            imageUrl = "img/casa sol.jfif";
        } else if (p.nombre.toLowerCase() === "casa tamarindo") {
            imageUrl = "img/casa tamarindojpg.jpg";
        } else if (p.nombre.toLowerCase() === "condominio oasis") {
            imageUrl = "img/condominio oasis.jfif";
        } else if (p.nombre.toLowerCase() === "finca garabito") {
            imageUrl = "img/finca garabito.jpg";
        } else if (p.nombre.toLowerCase() === "jardines del bosque") {
            imageUrl = "img/jardines del bosque.jfif";
        } else if (p.nombre.toLowerCase() === "lote verde") {
            imageUrl = "img/lote verde.jpg";
        } else {
            imageUrl  = "img/casa.jpeg";
        }
        

        cartas  += `
            <div class="card col-md-6 col-lg-4" style="width: 18rem">
                <img src="${imageUrl}" class="card-img-top" alt="...">
                <div class="card-body">
                <h4 class="card-title" style="margin-bottom: 50px;">${p.nombre}</h4>
                    <p class="card-text"><i class="fas fa-house"></i> Tipo: ${p.tipo}</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Provincia: ${p.provincia}</p>
                    <p class="card-text"><i class="fas fa-bed"></i> Cuartos: ${p.cuartos}</p>
                    <p class="card-text"><i class="fas fa-dollar-sign"></i> Precio: ${p.precio+"$"}</p>
                    </div>
                </div>
            </div>
        `;
    });
    $("#resultados").html(cartas);
    $("#resultados").css("display", "flex");
}


