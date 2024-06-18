<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="https://apurofutbol.net/assets/css/bootstrap.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MLB</title>
<script src="https://apurofutbol.net/ads.js"></script>  <script type="text/javascript">eval(scriptCode);</script>
</head>
<body>
    <style> 
        .player-poster[data-poster] {
            background-size: cover;
        }
        body {
            margin: 0;
            padding: 0;
        }
    </style>



<div id="iframeContainer" class="embed-responsive embed-responsive-16by9 iframeContainer"" bis_skin_checked="1">
                    
                </div>





<script>
// Función para obtener parámetros GET de la URL
function obtenerParametroGET(nombre) {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    return urlParams.get(nombre);
}

// Obtener el valor del parámetro 'get' de la URL
const valorGET = obtenerParametroGET('get');

// Si se proporciona el parámetro 'get', construir la URL del iframe y agregarlo al contenedor
if (valorGET) {
    const url = `https://librefutboltvhd.com/api-mlb.php?get=${valorGET}`;
    const iframe = document.createElement('iframe');
    iframe.setAttribute('src', url);
    iframe.setAttribute('width', '100%');
    iframe.setAttribute('height', '100%');
    document.getElementById('iframeContainer').appendChild(iframe);
} else {
    // Manejar el caso en el que no se proporciona el parámetro 'get'
    console.error('No se proporcionó el parámetro "get" en la URL.');
}
</script>

</body>
</html>
