<?php

$nombreFichero = "visitas.txt";
$fichero = fopen($nombreFichero, "r");
$tamanno = filesize($nombreFichero);
$texto = fread($fichero, $tamanno);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libro de Visitas</title>
    <link type="text/css" rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Libro de Visitas</h1>
    <pre>
        <?php
        echo $texto;
        ?>
    </pre>
</body>
</html>
