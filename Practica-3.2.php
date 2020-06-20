<?php

/**
 * Práctica 3.2. Hay que analizar la frase
 * "El perro de San Roque no tiene rabo", mostrando:
 *   Las letras totales de la frase.
 *   El número de palabras de la frase.
 *   Una línea con el número de letras de cada palabra.
 */

$frase = "El perro de San Roque no tiene rabo";

// crear un array con las palabras que contiene una frase
$palabras = explode(" ", $frase);

echo "FRASE A ANALIZAR: " . $frase;
echo "<br><br>";

echo strlen($frase) . " letras";
echo "<br>";

echo substr_count($frase, " ") . " espacios en blanco";
echo "<br>";

echo count($palabras) . " palabras";

echo "<br><br>";

foreach ($palabras as $key => $value) {
    echo $value . " " . strlen($value) . " letras<br>";
}




?>