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

$fraseOriginal = "Perro ladrador poco mordedor";
$desplazamiento = 4;


/** 
 * Función que recibe como parámetros una cadena de texto
 * y un valor numérico de desplazamiento
 * en el que busca cada letra de la cadena en un array que contiene el alfabeto
 * y usa el desplazamiento para pasar a otra letra 
 */
function codificarArray($frase, $valor)
{
    global $alfabeto, $alfabetoMayusculas;
    echo "Frase códificada: ";
    for ($i=0; $i < strlen($frase); $i++) {
        // Si es un espacio lo sigue mostrando
        if ($frase[$i] == " ") {
            echo $frase[$i];
        } else {
            // Si la letra es minúscula
            if (in_array($frase[$i], $alfabeto, true)) {
                // Suma el desplazamiento al valor de la letra actual
                $letra = array_search($frase[$i], $alfabeto);
                echo $alfabeto[($letra + $valor) % count($alfabeto)];
            } else {
                // Si la letra es mayúscula
                if (in_array($frase[$i], $alfabetoMayusculas, true)) {
                    // Suma el desplazamiento al valor de la letra actual
                    $letra = array_search($frase[$i], $alfabetoMayusculas);
                    echo $alfabetoMayusculas[($letra + $valor) % count($alfabeto)];
                }
            }
        }
    }
}

// Método usando un Array que incluye el alfabeto inglés
echo "<b>Método usando un Array que incluye el alfabeto inglés</b>
    <br><br>
    Frase original: " . $fraseOriginal
    . "<br>
    Desplazamiento: " . $desplazamiento
    . "<br>";
echo codificarArray($fraseOriginal, $desplazamiento);

echo "<br><br><br>";

?>