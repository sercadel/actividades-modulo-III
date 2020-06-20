<?php

include 'biblioteca.php';

echo "<h2>Contenido del fichero <em>" . $_GET['elemento'] . "</em></h2>";

echo "<pre>"
        . verFichero($_GET['elemento'], $_GET['directorio'])
    . "</pre>";

echo "<br>";
echo "<a href=\"listar.php\">Volver a Listar Ficheros</a>"
?>