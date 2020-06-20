<?php

$conversionPesetaEuro = 166.386;

function pesetasAEuros($valor)
{
    global $conversionPesetaEuro;
    return number_format($valor / $conversionPesetaEuro, 2, ',', '.');
}

function eurosAPesetas($valor)
{
    global $conversionPesetaEuro;
    return number_format($valor * $conversionPesetaEuro, 2, ',', '.');
}

echo "<b>Conversión de Pesetas a Euros</b>
    <br>
    10.000 ptas equivalen a " . pesetasAEuros(10000) . " €";

echo "<br><br>";

echo "<b>Conversión de Euros a Pesetas</b>
    <br>
    60 Euros equivalen a " . eurosAPesetas(60) . " ptas";

?>