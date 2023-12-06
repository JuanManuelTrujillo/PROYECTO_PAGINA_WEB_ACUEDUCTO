<?php
$conexion = new mysqli("127.0.0.1", "root", "root", "u684809565_acueducto");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_eliminar = $_GET['id'];

    // Eliminar la entrada de la base de datos
    $conexion->query("DELETE FROM imagenes_carousel WHERE id = $id_eliminar");

    header("Location:index_carrusel.php");
} else {
    echo "Petición no válida.";
}

$conexion->close();
?>