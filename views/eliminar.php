<?php
require_once('../library/motor.php');

if (!isset($_GET['id'])) {
    die("Error: No se especificó un ID válido.");
}

$id = $_GET['id'];

// Eliminar personaje de la base de datos
$sql = "DELETE FROM products WHERE id = :id";
$parametros = [':id' => $id];

conexion::exec($sql, $parametros);

// Redirigir al listado después de eliminar
header("Location: productos.php");
exit();
?>
