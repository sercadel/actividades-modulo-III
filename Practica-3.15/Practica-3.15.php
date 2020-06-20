<?php

include "cripto.php";


// Comprueba si algún campo esta vacío
if (!empty($_POST['fraseOriginal'])
    && !empty($_POST['desplazamiento'])
) {
    // Comprobar que la frase solo es texto y que el desplazamiento es un número
    if (preg_match('/[a-zA-Z]/', $_POST['fraseOriginal'])
        && preg_match('/[0-9]/', $_POST['desplazamiento'])
    ) {
        $cod = implode("", codificar($_POST['fraseOriginal'], $_POST['desplazamiento']));
    } else {
        // Avisa que solo son validos los datos númericos
        echo "<p class=\"error\">Debe introducir únicamente un texto en el primer campo y un valor numérico en el segundo.</p>";
    }
} else {
    // Avisa que solo son validos los datos númericos
    echo "<p class=\"error\">Debe Completar los dos campos.</p>";
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Códificar Frase</title>
    <style>
        .contenedor {
            margin: auto;
            width: 100%;
            background-color: #fff;
            padding: 20px;
        }

        .contenedor {

        }

        h1, h2, h3, h4, h5, h6 {
            margin: auto;
            width: 720px;
        }

        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #536872;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #323f45;
        }

        div.formulario {
            margin: auto;
            width: 720px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Codificador</h1>
        <div class="formulario">
            <form action="<?php echo escape($_SERVER['PHP_SELF']); ?>" method="post">
                <legend>Introduzca una frase</legend>
                <input type="text" name="fraseOriginal" value="<?php 
                if (isset($_POST['fraseOriginal'])) {
                    print $_POST['fraseOriginal'];
                };
                ?>">
                <legend>Introduzca un número de desplazamiento</legend>
                <input type="text" name="desplazamiento" value="<?php 
                if (isset($_POST['desplazamiento'])) {
                    print $_POST['desplazamiento'];
                };
                ?>">
                <input type="submit" value="Enviar">
                <br><br>
                <?php
                if (isset($cod)) {
                    echo "<legend>Frase codificada</legend>";
                    echo "<input type=\"text\" width: name=\"fraseCodificada\" readonly=\"readonly\" value=\"$cod\">";
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>