<?php

// Biblioteca de funciones

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


?>