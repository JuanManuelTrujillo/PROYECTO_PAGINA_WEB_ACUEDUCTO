<?php require_once "parte_superior.php"?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1 class="m-5 text-center">EDITAR INFORMACIÓN DE USUARIOS</h1>
  <form class="container" action="conexion_editar_usuarios.php" method="POST">
  <?php
         include 'conexion.php';

            $sql = "SELECT * FROM registro_usuarios WHERE id=".$_GET['id'];
            $resultado = $conn->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Usuario:</label>
            <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Actualizar Información</button>
            <a href="registro_usuarios.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

  </section>
  <!-- /.content -->
</div>

<?php require_once "parte_inferior.php"?>