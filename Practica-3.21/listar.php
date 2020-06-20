<?php

include 'biblioteca.php';

// Directorio de los archivos recibidos
$directorio = "uploads";

// listado de los elementos del directorio
$lista = listarDirectorio($directorio);

/* echo "<pre>";
    print_r($lista);
echo "</pre>"; */

// Ordenar Elementos a mostrar
if ($_SERVER["REQUEST_METHOD"] == "POST"
    && isset($_POST['ordenar'])
    && isset($lista)
) {
    switch ($_POST['ordenar']) {
    
    // Ordenar por Nombre
    case 'nombre':
        $ordenarPor = "Nombre";
        // Modo ascendente
        if (isset($_POST['asc'])) {
            $keys = array_column($lista, $ordenarPor);
            array_multisort($keys, SORT_ASC, $lista);
        }
        // Modo descendente
        if (isset($_POST['desc'])) {
            $keys = array_column($lista, $ordenarPor);
            array_multisort($keys, SORT_DESC, $lista);
        }
        break;

    // Ordenar por Extensión
    case 'extension':
        $ordenarPor = "Extensión";
        // Modo ascendente
        if (isset($_POST['asc'])) {
            $keys = array_column($lista, $ordenarPor);
            array_multisort($keys, SORT_ASC, $lista);
        }
        // Modo descendente
        if (isset($_POST['desc'])) {
            $keys = array_column($lista, $ordenarPor);
            array_multisort($keys, SORT_DESC, $lista);
        }
        break;
    
    // Ordenar por Tamaño
    case 'tamanno':
        $ordenarPor = "Tamaño";
        // Modo ascendente
        if (isset($_POST['asc'])) {
            $keys = array_column($lista, $ordenarPor);
            array_multisort($keys, SORT_ASC, $lista);
        }
        // Modo descendente
        if (isset($_POST['desc'])) {
            $keys = array_column($lista, $ordenarPor);
            array_multisort($keys, SORT_DESC, $lista);
        }
        break;
    default:
        // echo "Ninguna Opción";
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Ficheros</title>
</head>
<body>
    <?php echo "<h2>Elementos dentro del directorio <em>" . $directorio . "</em></h2>"; ?>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="orden">
            Ordenar por:
            <select name="ordenar" id="orden">
                <!-- Opción Nombre -->
                <option value="nombre"
                <?php
                if (isset($_POST['ordenar'])
                    && $_POST['ordenar'] == "nombre"
                ) {
                    echo "selected";
                }
                ?>
                >Nombre
                </option>
                <!-- Opción Extensión -->
                <option value="extension"
                <?php
                if (isset($_POST['ordenar'])
                    && $_POST['ordenar'] == "extension"
                ) {
                    echo "selected";
                }
                ?>
                >Extensión
                </option>
                <!-- Opción Tamaño -->
                <option value="tamanno"
                <?php
                if (isset($_POST['ordenar'])
                    && $_POST['ordenar'] == "tamanno"
                ) {
                    echo "selected";
                }
                ?>
                >Tamaño
                </option>
            </select>
        </label>
        <input type="submit" name="asc" value="Ascendente">
        <input type="submit" name="desc" value="Descendente">
    </form>
    <br>
    <div class="listado">
        <?php
        
        echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Extensión</th>
                    <th>Tamaño</th>
                </tr>";
        // Si hay elementos en el directorio los muestra
        if (isset($lista)) {
            foreach ($lista as $fichero => $detalles) {
                echo "<tr>";
                foreach ($detalles as $indice => $valor) {
                    if ($indice == "Nombre") {
                        echo "<td>
                        <a href=\"verfichero.php?"
                        . "elemento="
                        . $detalles['Nombre'] . "." . $detalles['Extensión']
                        . "&directorio=" . $directorio . "\">"
                        . $valor
                        . "</a>";
                    }
                    if ($indice == "Extensión") {
                        echo "<td>" . $valor . "</td>";
                    }
                    if ($indice == "Tamaño") {
                        echo "<td>" . $valor . " Bytes</td>";
                    }
                }
                echo "</tr>";
            }
        }
        echo "</table>";

        /* echo "<pre>";
        print_r($lista);
        echo "</pre>"; */

        ?>
    </div>
    <br><br>
        <a href="subir.php">Subir Fichero</a>
</body>
</html>