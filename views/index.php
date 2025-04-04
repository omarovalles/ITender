<?php

include_once ('../library/motor.php');

$sql = "SELECT * FROM products"; 
$filas = conexion::consulta($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITender</title>
</head>

<style> 
.container{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f0f0f0;
}
</style>
<body>
    <nav class="navegator">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <div class="container">

    </div>
</body>
</html>
