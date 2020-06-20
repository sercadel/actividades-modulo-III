<?php

include "usuarios.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"
    && isset($_POST['nombre'])
    && isset($_POST['contrasenna'])
) {
    $usuario = $_POST['nombre'];
    $contrasenna = $_POST['contrasenna'];

    $nombreFichero = "accesos.txt"; // Fichero en el que añadir los registros
    $fichero = fopen($nombreFichero, "a"); // abre el fichero en modo escritura al final del mismo

    if ($contrasenna == $usuarios[$usuario]) {
        $texto = date('d-m-Y - H:i:s') . " | El usuario " . $usuario . " ha accedido al sistema." . PHP_EOL;
        fwrite($fichero, $texto); // escribir en el fichero
        fclose($fichero); // cerrar fichero

        // Redirección a ok.php
        header('Location: ok.php');
    } else {
        $texto = date('d-m-Y - H:i:s') . " | Intento fallido de acceso del usuario " . $usuario . "." . PHP_EOL;
        fwrite($fichero, $texto); // escribir en el fichero
        fclose($fichero); // cerrar fichero

        // Redirección a error.html
        header('Location: error.html');
    }
} else {
    header('Location: login.html');
}

?>