<?php

$opciones = array(
    "piedra",
    "papel",
    "tijera"
);
// Inicia las variables
$jugada = $miJugada = "";

// Establece las estadísticas a 0 al principio de la partida
$ganadas = $empatadas = $perdidas = 0;

// Si ya se estaba jugando sigue mostrando el valor anterior
if (isset($_POST["ganadas"])
    && isset($_POST["empatadas"])
    && isset($_POST["perdidas"])
) {
    $ganadas += $_POST["ganadas"];
    $empatadas += $_POST["empatadas"];
    $perdidas += $_POST["perdidas"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST"
    && isset($_POST["jugada"])
) {
    $jugada = $_POST["jugada"];
    $miJugada = $opciones[rand(0, 2)];
    if ($jugada == $miJugada) {
        $resultado = "Empate";
        $empatadas += 1;
    } else {
        if (($jugada == "piedra" && $miJugada == "tijera")
            || ($jugada == "tijera" && $miJugada == "papel")
            || ($jugada == "papel" && $miJugada =="piedra")
        ) {
            $resultado = "Tu ganas";
            $ganadas += 1;
        } else {
            $resultado = "Gano yo";
            $perdidas += 1;
        }

    }
}

?>

<!-- Mientras no se seleccione una opción, aunque hagamos clic en jugar, se mostrará el formulario. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piedra, Papel o Tijera</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <header>
            <h1 class="centrado">Piedra, Papel o Tijera</h1>
        </header>
        <div id="cuerpo">
            <div class="formulario flex">
                <form class="flex-column" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="flex-row opciones">
                        <label class="opcion-circulo">Piedra
                            <input type="radio" name="jugada" value="piedra">
                            <span class="visto"></span>
                        </label>

                        <label class="opcion-circulo">Papel
                            <input type="radio" name="jugada" value="papel">
                            <span class="visto"></span>
                        </label>

                        <label class="opcion-circulo">Tijera
                            <input type="radio" name="jugada" value="tijera">
                            <span class="visto"></span>
                        </label>
                        <input type="hidden" name="ganadas" value="<?php echo $ganadas; ?>">
                        <input type="hidden" name="empatadas" value="<?php echo $empatadas; ?>">
                        <input type="hidden" name="perdidas" value="<?php echo $perdidas; ?>">
                    </div>
                    <input type="submit" value="Jugar">
                </form>
                <div class="resultado">
                    <p>
                    <?php
                    if (isset($_POST["jugada"])) {
                        echo "Has elegido <b>" . ucwords($jugada)
                            . "</b>, yo he elegido <b>" . ucwords($miJugada)
                            . "</b>.<br>
                            <b>" . $resultado
                        . "</b>.
                        <br><br>
                        ¿Quieres jugar otra vez?
                        <br>";
                    }
                    ?>
                    </p>
                </div>
            </div>
            <div class="estadisticas">
                <table>
                    <thead>
                    <tr>
                        <th colspan="2">Estadísticas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Partidas ganadas:</td>
                        <td><?php echo $ganadas ?></td>
                    </tr>
                    <tr>
                        <td>Partidas empatadas:</td>
                        <td><?php echo $empatadas ?></td>
                    </tr>
                    <tr>
                        <td>Partidas perdidas:</td>
                        <td><?php echo $perdidas ?></td>
                    </tr>
                    </tbody>
                </table>
                <form class="flex" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input class="restablecer" type="submit" name="restablecer" value="Borrar Estadísticas">
                </form>
            </div>
        </div>
        <?php
/* 
            echo "<pre>";
            print_r($_POST);
            echo "<br>";
            echo "Ganadas: ";
            var_dump($ganadas);
            echo "<br>";
            echo "Empatadas: ";
            var_dump($empatadas);
            echo "<br>";
            echo "Perdidas: ";
            var_dump($perdidas);
            echo "</pre>";
             */
        ?>

    </div>
</body>
</html>