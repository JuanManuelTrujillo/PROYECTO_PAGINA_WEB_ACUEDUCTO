<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_archivo = $_FILES["archivo"]["name"];
    $tipo_archivo = $_FILES["archivo"]["type"];
    $datos_archivo = file_get_contents($_FILES["archivo"]["tmp_name"]);

    $conexion = new mysqli("127.0.0.1", "root", "", "u684809565_acueducto");

    $stmt = $conexion->prepare("INSERT INTO imagenes_carousel (nombre_archivo, tipo_archivo, datos_archivo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre_archivo, $tipo_archivo, $datos_archivo);

    if ($stmt->execute()) {
		header("Location:index_carrusel.php");
    } else {
        echo "Error al subir la imagen.";
    }

    $stmt->close();
    $conexion->close();
}
?>
