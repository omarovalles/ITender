<?php

include_once ('../library/motor.php');

// Enviar el formulario 

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$category = $_POST['category'];
$foto = $_POST['foto'];

if ($name && $price && $stock && $category && $foto) {
    // Guardar el producto en la base de datos
    agregarProducto($name, $price, $stock, $category, $foto);
    echo "<h2>Producto agregado correctamente</h2>";
} else {
    echo "<h2>Por favor complete todos los campos</h2>";
}

// Redirigiendo a la página de productos después de 2 segundos

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t</title>
</head>
<body>
    <a href="index.php">xd</a>
</body>
</html>
