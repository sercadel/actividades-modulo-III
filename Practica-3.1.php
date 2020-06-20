<?php

/**
 * Práctica 3.1. Crea un programa que extraiga
 * los caracteres en posiciones impares de la frase
 * "A quien madruga Dios le ayuda".
*/

$frase = "A quien madruga Dios le ayuda";
$posicion = 0;

for ($i=0; $i <= (strlen($frase) / 2); $i++) {
    echo $frase[$posicion];
    $posicion += 2;
}

?>