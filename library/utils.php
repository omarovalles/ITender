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

function agregarProducto($name,$price,$stock,$category,$foto)
{
    $sql = "INSERT INTO products (productname, price, stock, category, foto) VALUES (:productname, :price, :stock, :category, :foto)";
    $parametros = [
        ':productname' => $name,
        ':price' => $price,
        ':stock' => $stock,
        ':category' => $category,
        ':foto' => $foto
    ];
    conexion::exec($sql, $parametros);
}



?>