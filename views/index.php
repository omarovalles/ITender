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
    width: 20%;
    height: 100vh;
    background-color: #f9f9f9;
    border-right: 1px solid #ccc;
    display: flex;
    flex-direction: column;
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
    width: 50%;
    height: 50%;
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
        <div class="form">
            <h1>Agregar Productos</h1>
            <form action="agregar.php" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="color">Price:</label><br>
                <input type="decimal" id="price" name="price"><br><br>
                <label for="tipo">Stock:</label><br>
                <input type="number" id="stock" name="stock"><br><br>
                <label for="category">Category:</label><br>
                <input type="text" id="category" name="category"><br><br>
                <label for="foto">Foto:</label><br>
                <input type="url" id="foto" name="foto"><br><br>
                <input type="submit" value="Agregar Producto">
            </form>
    </div>
</body>
</html>
