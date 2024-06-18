// ads.js

// Función para cargar el anuncio
function cargarAnuncio() {
    // Crear el elemento div
    var divContainer = document.createElement('div');
    divContainer.id = 'imagenEnlaceContainer';

    // Crear el elemento <a> y configurar sus atributos
    var enlace = document.createElement('a');
    enlace.href = '#';
    enlace.onclick = abrirEnlaceYDesaparecerImagen;

    // Crear el elemento <img> y configurar sus atributos
    var imagen = document.createElement('img');
    imagen.id = 'imagenEnlace';
    imagen.src = 'https://apurofutbol.net/1xbet/pixel.png?1';
    imagen.alt = 'Imagen';
    imagen.width = '100%';
    imagen.height = '100%';
    imagen.style.position = 'fixed';
    imagen.style.top = '0';
    imagen.style.left = '0';
    imagen.style.width = '100%';
    imagen.style.height = '100%';
    imagen.style.zIndex = '9999';

    // Agregar la imagen al enlace
    enlace.appendChild(imagen);

    // Agregar el enlace al contenedor div
    divContainer.appendChild(enlace);

    // Agregar el contenedor div al cuerpo del documento
    document.body.appendChild(divContainer);
}

// Función para abrir el enlace y ocultar la imagen
function abrirEnlaceYDesaparecerImagen() {
    // Ocultar la imagen primero
    document.getElementById("imagenEnlace").style.display = "none";
    // Abrir el enlace después de ocultar la imagen
    window.open("https://affpa.top/L?tag=d_3231199m_97c_&site=3231199&ad=97", "_blank");
    // Retornar false para prevenir el comportamiento predeterminado del enlace
    return false;
}

// Llamar a la función para cargar el anuncio cuando se cargue el documento
document.addEventListener("DOMContentLoaded", cargarAnuncio);
