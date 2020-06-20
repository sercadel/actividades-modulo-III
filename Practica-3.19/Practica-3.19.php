<?php

function listarDirectorio($directorio)
{
    // Obtiene un listado de los elementos dentro del directorio
    $arrayDirectorios = scandir($directorio);

    // Elimina del resultado los directorios "." y ".."
    unset($arrayDirectorios[array_search('.', $arrayDirectorios, true)]);
    unset($arrayDirectorios[array_search('..', $arrayDirectorios, true)]);

    // Si el directorio esta vacío no muestra nada
    if (count($arrayDirectorios) < 1) {
        return;
    }

    echo "<ol>";
    foreach ($arrayDirectorios as $elemento) {
        echo "<li>" . $elemento;
        if (is_dir($directorio . '/' . $elemento)) {
            listarDirectorio($directorio . '/' . $elemento);
        }
        echo "</li>";
    }
    echo "</ol>";
}

$directorio ="test";

echo "<h2>Elementos dentro del directorio <em>" . $directorio . "</em></h2>";

listarDirectorio($directorio);

?>