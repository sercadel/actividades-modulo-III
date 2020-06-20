<?php

include "biblioteca.php";

$ciudades = array(
    "Barcelona",
    "Cordoba",
    "Pamplona"
);

// Inicializa las variables
$codificado = array();
$decodificado = array();

$desplazamiento = 4;

// Codificar
foreach ($ciudades as $value) {
    array_push($codificado, implode("", codificar($value, $desplazamiento)));
}

// Decodificar
foreach ($codificado as $value) {
    array_push($decodificado, implode("", decodificar($value, $desplazamiento)));
}

// Resultado
echo "<table style=\"width:480px\">
    <tr>
        <th>Original</th>
        <th>Codificada</th>
        <th>Decodificada</th>
    </tr>";
foreach ($ciudades as $key => $value) {
    echo "<tr><td>" . $ciudades[$key] . "</td>"
        . "<td>" . $codificado[$key] . "</td>"
        . "<td>" . $decodificado[$key] . "</td></tr>";
}
echo "</tr>
    </table>";


/* 
// echo "<b>Original - Codificada - Decodificada</b><br>";
foreach ($ciudades as $key => $value) {
    echo $ciudades[$key]
        . " - " . $codificado[$key]
        . " - " . $decodificado[$key]
        . "<br>";
}
 */


/* 
echo "<pre>";
print_r($ciudades);
print_r($codificado);
print_r($decodificado);
echo "</pre>";
 */

?>