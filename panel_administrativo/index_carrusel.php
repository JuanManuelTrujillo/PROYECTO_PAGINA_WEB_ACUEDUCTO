<?php require_once "parte_superior.php"?>
<?php
include "conexion_subir_carousel.php";
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1 class="m-5 text-center">CARRUSEL DE IMAGENES</h1>
  <div class="container mt-5">
    <form action="conexion_subir_carousel.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="archivo" class="form-label">Seleccionar una Imagen:</label>
            <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-success">Subir Imagen</button>
    </form>
</div>
<hr>
<div class="container-fluid">
<?php
$conexion = new mysqli("127.0.0.1", "root", "", "u684809565_acueducto");

$result = $conexion->query("SELECT id, nombre_archivo FROM imagenes_carousel ORDER BY id DESC");

echo "<table class='table table-bordered'>";
echo "<thead class='table-gray'>";
echo "<tr><th>Imagen Carousel</th><th>Acciones</th></tr>";
echo "</thead>";

echo "<tbody>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";

    // Columna de la imagen
    echo "<td>";
    echo "<img src='mostrar_imagen_carousel.php?id={$row['id']}' class='img-fluid' alt='Imagen Carousel'>";
    echo "</td>";

    // Columna de acciones
    echo "<td>";
    echo "<a href='eliminar_imagen_carousel.php?id={$row['id']}' class='btn btn-danger m-2' onclick='return confirm(\"¿Estás seguro de eliminar esta imagen?\")'>Eliminar</a> ";
    echo "<a href='descargar_imagen_carousel.php?id={$row['id']}' class='btn btn-primary m-2'>Descargar</a>";
    echo "</td>";

    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

$conexion->close();
?>

</div>
  </section>
  <!-- /.content -->
</div>

<?php require_once "parte_inferior.php"?>