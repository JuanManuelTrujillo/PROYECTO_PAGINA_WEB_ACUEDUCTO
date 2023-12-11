<?php
$conexion = new mysqli("127.0.0.1", "root", "", "u684809565_acueducto");

$id = $_GET['id'];
$result = $conexion->query("SELECT tipo_archivo, datos_archivo FROM imagenes_carousel WHERE id = $id");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("Content-type: " . $row['tipo_archivo']);
    echo $row['datos_archivo'];
}

$conexion->close();
?>