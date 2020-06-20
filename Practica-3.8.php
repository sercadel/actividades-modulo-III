<?php

$personas = array(
    'María' => 1.75,
    'Natalia' => 1.78,
    'Sergio' => 1.85,
    'Irina' => 1.70,
);

/*
echo "<pre>";
print_r($personas);
echo "</pre>";
*/

foreach ($personas as $key => $valor) {
    echo $key . " mide " . $valor . " m";
    echo "<br>";
}

?>