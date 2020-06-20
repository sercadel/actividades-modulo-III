<?php

/*
En el código ASCII los números se encuentran en las posiciones 48 a 57,
* las letras en las posiciones 65 a 90 (mayúsculas)
* y 97 a 122 (minúsculas).
* Una vez comprobado que es correcto debe mostrar el DNI
* por pantalla con la última letra en mayúsculas,
* independientemente de cómo estuviera en el dato de entrada.
*/


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
 * Función que recibe como parámetro una cadena de texto
 * en el que busca cada letra de la cadena en un array que contiene el alfabeto
 * y devuelve la siguiente letra en su lugar 
 */
function codificarArray($frase)
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
                echo $alfabeto[($letra + 1) % count($alfabeto)];
            } else {
                // Si la letra es mayúscula
                if (in_array($frase[$i], $alfabetoMayusculas, true)) {
                    // Suma el desplazamiento al valor de la letra actual
                    $letra = array_search($frase[$i], $alfabetoMayusculas);
                    echo $alfabetoMayusculas[($letra + 1) % count($alfabeto)];
                }
            }
        }
    }
}

// Método usando un Array que incluye el alfabeto inglés
echo "<b>Método usando un Array que incluye el alfabeto inglés</b>
    <br><br>
    Frase original: " . $fraseOriginal
    . "<br>";
echo codificarArray($fraseOriginal);

echo "<br><br><br>";

?>