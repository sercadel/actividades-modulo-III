<?php
/**
 * Práctica 3.3. Comprobar si un NIF es válido.
 * Un NIF ha de constar exactamente de 8 números y una letra.
 * Para comprobar si un carácter es un número o una letra
 * se puede usar la función ord() que nos da el código ASCII de dicho carácter.
 * En el código ASCII los números se encuentran en las posiciones 48 a 57,
 * las letras en las posiciones 65 a 90 (mayúsculas)
 * y 97 a 122 (minúsculas).
 * Una vez comprobado que es correcto debe mostrar el DNI
 * por pantalla con la última letra en mayúsculas,
 * independientemente de cómo estuviera en el dato de entrada.
 */

$dni = "12345678s";
echo "<p>DNI introducido: " . $dni . "</p>";
echo "DNI comprobado: ";

if (preg_match('/[0-9]{8}[a-zA-Z]/', $dni)
    && (strlen($dni) == 9)
) {
    for ($i=0; $i < strlen($dni); $i++) {
        if (ord($dni[$i]) >= 48
            && ord($dni[$i]) <= 57
        ) {
            echo $dni[$i];
        }
        if (ord($dni[$i]) >= 65
            && ord($dni[$i]) <= 90
        ) {
            echo $dni[$i];
        }

        if (ord($dni[$i]) >= 97
            && ord($dni[$i]) <= 122
        ) {
            echo strtoupper($dni[$i]);
        }
    }
} else {
    echo "Tiene que introducir 8 números y una letra al final";
}

/*
echo "<br><br>";

echo "A " . ord("A") . "<br>";
echo "a " . ord("a") . "<br>";
echo ord("a") - ord("A") . "<br><br>";

echo "B " . ord("B") . "<br>";
echo "b " . ord("b") . "<br>";
echo ord("b") - ord("B") . "<br><br>";

echo "Z " . ord("Z") . "<br>";
echo "z " . ord("z") . "<br>";
echo ord("z") - ord("Z") . "<br><br>";
*/

?>