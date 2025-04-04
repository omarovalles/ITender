<?php
include ('motor.php');

function mostrarTablas($filas)
{

    if (!$filas) {
        echo "<h2>No hay datos para mostrar</h2>";
        return;
    }
 echo "<table class='table table-striped'>";
    echo "<thead><tr>";
    $fila = $filas[0];
    foreach ($fila as $columna => $valor) {
        echo "<th>$columna</th>
        ";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    foreach ($filas as $fila) {
        echo "<tr>";
        foreach ($fila as $columna => $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}

function agregarPersonaje($nombre,$color,$tipo,$nivel,$foto)
{
    $sql = "INSERT INTO personajes (nombre, color, tipo, nivel, foto) VALUES (:nombre, :color, :tipo, :nivel, :foto)";
    $parametros = [
        ':nombre' => $nombre,
        ':color' => $color,
        ':tipo' => $tipo,
        ':nivel' => $nivel,
        ':foto' => $foto
    ];
    conexion::exec($sql, $parametros);
}



?>