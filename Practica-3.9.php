<?php

$precioKg = array(
    'Judías' => 3.5,
    'Patatas' => 0.4,
    'Tomates' => 1,
    'Manzanas' => 1.2,
    'Uvas' => 2.5,
);

$listaCompra = array(
    'Judías' => 1.21,
    'Patatas' => 1.73,
    'Tomates' => 2.08,
    'Manzanas' => 2.15,
    'Uvas' => 0.77,
);

/* 
echo "<pre>";
print_r($precioKg);
print_r($listaCompra);
echo "</pre>";
*/

$total = 0;

foreach ($listaCompra as $key => $valor) {
    echo $key . " - " . number_format($precioKg[$key], 2)
        . " - " . number_format($valor, 2) . " - "
        . number_format($valor * $precioKg[$key], 2);
        // Suma el precio del producto a la variable $total
        $total += number_format($valor * $precioKg[$key], 2);
    echo "<br>";
}

echo "<br>";
echo "TOTAL: " . number_format($total, 2) . " €";
echo "<br><br>";
echo "Gracias por su compra.";

?>