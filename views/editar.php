<?php
require_once '../library/motor.php';

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$category = $_POST['category'];
$foto = $_POST['foto'];


// Actualizar en la base de datos
$sql = "UPDATE products SET productname = :nombre, price = :precio, stock = :stock, category = :categoria, foto = :foto WHERE id = :id";
$parametros = [
    ':nombre' => $name,
    ':precio' => $price,
    ':stock' => $stock,
    ':categoria' => $category,
    ':foto' => $foto,
    ':id' => $_POST['id']
];

conexion::exec($sql, $parametros);

// Redirigir al listado
header("Location: productos.php");
exit();
?>
