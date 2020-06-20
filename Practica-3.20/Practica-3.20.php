<?php

function listarDirectorio($directorio, $extension)
{
    $expReg = "/(" . $extension . ")/";
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
        if (is_file($directorio . '/' . $elemento)) {
            if (preg_match($expReg, $elemento)) {
                echo "<li>" . $elemento;
            }
        }
        if (is_dir($directorio . '/' . $elemento)) {
            echo "<li>" . $elemento;
            listarDirectorio($directorio . '/' . $elemento, $extension);
        }
        echo "</li>";
    }
    echo "</ol>";
}

$directorio ="test";
$extension = ".txt";
echo "<h2>Elementos con la extensión <em>" . $extension . "</em> dentro del directorio <em>" . $directorio . "</em></h2>";

listarDirectorio($directorio, $extension);

?>