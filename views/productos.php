<?php
require_once ('../library/motor.php');

$sql = "SELECT * FROM products"; 
$filas = conexion::consulta($sql);

foreach ($filas as &$fila) { 
    if (!isset($fila->id)) continue; 
    $fila->foto = "<img alt='' src='{$fila->foto}' width='100'>";
    $fila->act = "<a href='actualizar.php?id={$fila->id}' class='btn btn-warning btn-sm'>Editar</a> ";
    $fila->act .= "<a href='eliminar.php?id={$fila->id}' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este personaje?\");'>Eliminar</a>";
}
unset($fila);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>ITender</title>
</head>

<style> 
.body{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: blue;
}
.container{
    width: 100%;
    height: 100%;
    display: flex;
}
.navegator{
    width: 20% !important;
    height: 100vh !important;
    background-color: #f9f9f9 !important;
    border-right: 1px solid #ccc !important;
    display: flex !important;
    flex-direction: column !important;
    }
.navegator a{
    text-decoration: none;
    color: #333;
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ccc;
}

.navegator a:hover{
    background-color: #f0f0f0;
    color: #000;
}

.form {
    display: flex;
    text-align: center;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    margin: auto;
    background-color: #f0f0f0;
    border-radius: 10px;
    border: solid 1px #ccc;
    padding: 20px;
}
.form h1 {
    margin-bottom: 20px;
    color: #333;
}

.form input{
    width: 80%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
</style>
<body>
    <div class="container">
        <nav class="navegator">
            <a href="index.php">Agregar Productos</a>
            <a href="productos.php">Ver Productos</a>
        </nav>
        
        <!-- Mostrar los productos en una tabla -->
        <div class="form">
            <h1>Lista de Productos</h1>
            <?php
            mostrarTablas($filas);
            ?>
</body>
</html>
