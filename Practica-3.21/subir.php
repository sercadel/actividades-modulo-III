<?php



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Fichero</title>
</head>
<body>
    <form action="confirmar.php" method="post" enctype="multipart/form-data">
    <label for="entrada-fichero">
        Seleccione un fichero
        <input type="file" name="fichero" id="entrada-fichero">
    </label>
    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>