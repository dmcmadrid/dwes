<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos (UD4, diapositivas 7-10)</title>
</head>
<body>
<h1>Datos recibidos</h1>
<?php
// Diapositiva 7: como el formulario usa method="GET", los datos llegan en $_GET.
// La clave es el name del campo: name="nombre" → $_GET["nombre"].

// Diapositiva 8 (validación): antes de usar un dato, comprobar con isset que ha llegado.
if (isset($_GET["nombre"]) && $_GET["nombre"] != "") {
    $nombre = $_GET["nombre"];
    echo "<p>Nombre: $nombre</p>";
} else {
    echo "<p>No has escrito el nombre.</p>";
}

// Diapositivas 9-10 (multivalor): name="modulos[]" → $_GET["modulos"] es un array.
// Si no se marca ningún checkbox, el navegador no lo envía: por eso también va isset.
if (isset($_GET["modulos"])) {
    $modulos = $_GET["modulos"];
    echo "<p>Módulos elegidos:</p>";
    foreach ($modulos as $modulo) {
        echo "$modulo <br />";
    }
} else {
    echo "<p>No has elegido ningún módulo.</p>";
}
?>
<p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>
