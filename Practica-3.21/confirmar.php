<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"
    && isset($_FILES['fichero'])
) {
    $temporal = $_FILES['fichero']['tmp_name'];
    $destino = "uploads/" . $_FILES['fichero']['name'];
    if (move_uploaded_file($temporal, $destino)) {
        $partesRuta = pathinfo($destino);
        echo "<h2>Archivo subido con éxito</h2>
            <p>DATOS DEL FICHERO</p>
            Nombre: <strong><em>" . $partesRuta['filename'] . "</em></strong><br>
            Extensión: <strong><em>" . $partesRuta['extension']. "</em></strong><br>
            Tamaño: <strong><em>" . filesize($destino) . " Bytes</em></strong>";
    } else {
        echo "Ocurrió un error, no se ha podido subir el archivo";
    }
} else {
    header('location: subir.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmar</title>
</head>
<body>
    <br><br>
    <a href="subir.php">Subir Fichero</a>
    <br>
    <a href="listar.php">Listar Ficheros</a>
</body>
</html>