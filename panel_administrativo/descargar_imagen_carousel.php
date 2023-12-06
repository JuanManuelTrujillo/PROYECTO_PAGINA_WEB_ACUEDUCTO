<?php
$conexion = new mysqli("127.0.0.1", "root", "root", "u684809565_acueducto");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_descargar = $_GET['id'];

    // Obtener datos de la imagen desde la base de datos
    $result = $conexion->query("SELECT tipo_archivo, datos_archivo, nombre_archivo FROM imagenes_carousel WHERE id = $id_descargar");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Configurar las cabeceras para la descarga
        header("Content-type: " . $row['tipo_archivo']);
        header("Content-Disposition: attachment; filename=" . $row['nombre_archivo']);

        // Imprimir los datos de la imagen
        echo $row['datos_archivo'];
    } else {
        echo "La imagen no existe.";
    }
} else {
    echo "Petición no válida.";
}

$conexion->close();
?>
