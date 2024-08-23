


const precioMax = sessionStorage.getItem("precioMax");
const precioMin = sessionStorage.getItem("precioMin");
const numCuartos = sessionStorage.getItem("numCuartos");
const tipoPropiedad = sessionStorage.getItem("tipoPropiedad");
const provincia = sessionStorage.getItem("provincia");

console.log(precioMax);
console.log(precioMin);
console.log(numCuartos);
console.log(tipoPropiedad);
console.log(provincia);



const URL = `http://localhost:8080/buscarpropiedad/${tipoPropiedad}/${provincia}/${precioMax}/${precioMin}/${numCuartos}`;

//$("h1").html($("h1").html() + txtBuscar);


$.ajax({
    type: "GET",
    url: URL,
    dataType: "JSON",
    success: function (res) {

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

function cargarResultados(res){
    const imagenesPorNombre = {
        "casa blanca": "img/casa blanca.jpg",
        "alta vista": "img/alta vista.jfif",
        "casa esperanza": "img/casa esperanza.jpg",
        "condominio gregal": "img/condominio gregal.jpg",
        "casa sol": "img/casa sol.jfif",
        "casa tamarindo": "img/casa tamarindojpg.jpg",
        "condominio oasis": "img/condominio oasis.jfif",
        "finca garabito": "img/finca garabito.jpg",
        "jardines del bosque": "img/jardines del bosque.jfif",
        "lote verde": "img/lote verde.jpg",
    };

    const cartas = res.map(p => {
        const imageUrl = imagenesPorNombre[p.nombre.toLowerCase()] || "img/casa.jpeg";
        return `
            <div class="card col-md-6 col-lg-4" style="width: 18rem;">
                <img src="${imageUrl}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">${p.nombre}</h5>
                    <p class="card-text"><i class="fas fa-house"></i> Tipo: ${p.tipo}</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Provincia: ${p.provincia}</p>
                    <p class="card-text"><i class="fas fa-bed"></i> Cuartos: ${p.cuartos}</p>
                    <p class="card-text"><i class="fas fa-dollar-sign"></i> Precio: ${p.precio + "$"}</p>
                    <p class="card-text"><i class="fas fa-phone"></i>  +506 2227-2727</p>
                    <p class="card-text"><i class="fas fa-envelope"></i> Harmony@gmail.com</p>
                    
                
                </div>
            </div>
        `;
    }).join('');

    $("#resultados").html(cartas);
    $("#resultados").css("display", "flex");
}
