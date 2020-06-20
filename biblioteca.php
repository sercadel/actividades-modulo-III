<?php

// Genera el alfabeto inglés en un array
$alfabeto = range('a', 'z');
$alfabetoMayusculas = range('A', 'Z');

/*
// Ver el contenido del array $alfabeto y $alfabetoMayusculas
echo "<pre>";
print_r($alfabeto);
print_r($alfabetoMayusculas);
echo "</pre>";
*/


/** 
 * Función que recibe como parámetros una cadena de texto
 * y un valor numérico de desplazamiento
 * en el que busca cada letra de la cadena en un array que contiene el alfabeto
 * y usa el desplazamiento para pasar a otra letra
 */
function codificar($frase, $valor)
{
    $resultado = array();
    global $alfabeto, $alfabetoMayusculas;
    for ($i=0; $i < strlen($frase); $i++) {
        // Si es un espacio lo sigue mostrando
        if ($frase[$i] == " ") {
            // Añade al array el valor obtenido
            array_push($resultado, $frase[$i]);
        } else {
            // Si la letra es minúscula
            if (in_array($frase[$i], $alfabeto, true)) {
                // Suma el desplazamiento al valor de la letra actual
                $letra = array_search($frase[$i], $alfabeto);
                // Añade al array el valor obtenido
                array_push(
                    $resultado,
                    $alfabeto[($letra + $valor) % count($alfabeto)]
                );
            } else {
                // Si la letra es mayúscula
                if (in_array($frase[$i], $alfabetoMayusculas, true)) {
                    // Suma el desplazamiento al valor de la letra actual
                    $letra = array_search($frase[$i], $alfabetoMayusculas);
                    // Añade al array el valor obtenido
                    array_push(
                        $resultado,
                        $alfabetoMayusculas[($letra + $valor) % count($alfabeto)]
                    );
                }
            }
        }
    }
    return $resultado;
}

/** 
 * Función que recibe como parámetros una cadena de texto
 * y un valor numérico de desplazamiento
 * en el que busca cada letra de la cadena en un array que contiene el alfabeto
 * y usa el desplazamiento para pasar a otra letra 
 */
function decodificar($frase, $valor)
{
    // Crea un array vacío
    $resultado = array();

    global $alfabeto, $alfabetoMayusculas;

    for ($i=0; $i < strlen($frase); $i++) {
        // Si es un espacio lo sigue mostrando
        if ($frase[$i] == " ") {
            // Añade al array el valor obtenido
            array_push($resultado, $frase[$i]);
        } else {
            // Si la letra es minúscula
            if (in_array($frase[$i], $alfabeto, true)) {
                // Resta el desplazamiento al valor de la letra actual
                $letra = array_search($frase[$i], $alfabeto);

                // Mientras el resultado sea menor a cero
                while ($letra - $valor < 0) {
                    // Suma el número de letras del abecedario
                    // para volver recorer el array
                     $valor += count($alfabeto);
                }
                // Añade al array el valor obtenido
                array_push(
                    $resultado,
                    $alfabeto[(($letra - $valor) % count($alfabeto))]
                );
            } else {
                // Si la letra es mayúscula
                if (in_array($frase[$i], $alfabetoMayusculas, true)) {
                    // Resta el desplazamiento al valor de la letra actual
                    $letra = array_search($frase[$i], $alfabetoMayusculas);
                    
 
                    // Mientras el resultado sea menor a cero
                    while ($letra - $valor < 0) {
                        // Suma el número de letras del abecedario
                        // para volver recorer el array
                        $valor += count($alfabeto);
                    }
                    // Añade al array el valor obtenido
                    array_push(
                        $resultado,
                        $alfabetoMayusculas[(($letra - $valor) % count($alfabeto))]
                    );
                }
            }
        }
    }
    return $resultado;
}


// Convierte caracteres especiales en entidades HTML
function escape($cadena)
{
    return htmlspecialchars($cadena, ENT_QUOTES, 'UTF-8');
}

$testalert = "<script>alert('Vulnerable');</script>";




/**
 * 
 * 
 * 
 * 
 * 
 */
function find_all_files($dir)
{
    $root = scandir($dir);
    foreach($root as $value)
    {
        if($value === '.' || $value === '..') {continue;}
        if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;}
        foreach(find_all_files("$dir/$value") as $value)
        {
            $result[]=$value;
        }
    }
    return $result;
} 

?>