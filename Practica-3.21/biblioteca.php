<?php

// función abrir fichero
function verFichero($valor, $directorio)
{
    $rutaFichero = $directorio . '/' . $valor;
    $datosFichero = fopen($rutaFichero, "r");
    $tamanno = filesize($rutaFichero);
    $texto = fread($datosFichero, $tamanno);
    return $texto;
}

// Función listar los elementos de un directorio
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

    /*
    Crea un array donde se van a guardar
    los ficheros y sus datos (Nombre, Extensión, Tamaño en Bytes)
    */
    $listadoFicheros = array();

    foreach ($arrayDirectorios as $elemento) {
        if (is_file($directorio . '/' . $elemento)) {
            
            $partesRuta = pathinfo($directorio . '/' . $elemento);
            // Crea un array con los datos del fichero
            $datosFichero = array(
                'Nombre' => $partesRuta['filename'],
                'Extensión'  => $partesRuta['extension'],
                'Tamaño'  => filesize($directorio . '/' . $elemento)
            );
            // Añade el array $datosFichero al array $listadoFicheros
            array_push($listadoFicheros, $datosFichero);
        }
        /* No se aplica
        // Si es un directorio llama a la función para búsqueda recursiva
        if (is_dir($directorio . '/' . $elemento)) {
            listarDirectorio($directorio . '/' . $elemento);
        }
        */
    }
    return $listadoFicheros;
}

?>