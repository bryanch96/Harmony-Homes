// Función para obtener las últimas 3 propiedades visitadas del almacenamiento local
function obtenerUltimasPropiedadesVistas() {
    // Verificar si hay propiedades visitadas almacenadas en el almacenamiento local
    if (localStorage.getItem('propiedadesVistas')) {
        // Obtener las propiedades visitadas almacenadas como JSON
        const propiedadesVistas = JSON.parse(localStorage.getItem('propiedadesVistas'));
        // Mostrar las últimas 3 propiedades visitadas en la sección correspondiente
        const ultimasPropiedadesVistas = propiedadesVistas.slice(-3).reverse(); // Obtener las últimas 3 propiedades y revertir el orden
        const seccionPropiedadesVistas = document.getElementById('ultimas-propiedades-vistas');

        // Limpiar la sección antes de agregar las propiedades
        seccionPropiedadesVistas.innerHTML = '';

        // Iterar sobre las últimas propiedades visitadas y agregarlas a la sección
        ultimasPropiedadesVistas.forEach(propiedad => {
            const cardPropiedad = document.createElement('div');
            cardPropiedad.classList.add('card', 'col-md-6', 'col-lg-4');
            cardPropiedad.style.width = '18rem';
            cardPropiedad.innerHTML = `
                <img src="${propiedad.imagen}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">${propiedad.titulo}</h5>
                    <p class="card-text">${propiedad.descripcion}</p>
                    <p id="icono" style="color: rgba(13, 13, 13, 0.816)">${propiedad.ubicacion}</p>
                    <a href="${propiedad.enlace}" class="">Más Información</a>
                </div>
            `;
            seccionPropiedadesVistas.appendChild(cardPropiedad);
        });
    }
}

// Llamar a la función para mostrar las últimas propiedades visitadas cuando el documento esté cargado
document.addEventListener('DOMContentLoaded', obtenerUltimasPropiedadesVistas);
