<?php

// Genera el alfabeto inglés en un array
$alfabeto = range('a', 'z');

// variable que contiene la letra ñ
$enne = 'ñ';

// añade la ñ al array en la posición 14 (entre n y o)
array_splice($alfabeto, 14, 0, $enne);

/*
echo "<pre>";
print_r($alfabeto);
echo "</pre>";
*/

echo "<p>En minúsculas:<br><b>";
foreach ($alfabeto as $key => $value) {
    echo $value;
}
echo "</b></br>";

echo "<p>En mayúsculas:<br><b>";
foreach ($alfabeto as $key => $value) {
    // mb_strtoupper en vez de strtoupper para hacer la ñ mayúscula
    echo mb_strtoupper($value);
}
?>