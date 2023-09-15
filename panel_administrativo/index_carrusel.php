<?php require_once "parte_superior.php"?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1 class="m-0">CARRUSEL IMAGENES</h1>
  <br>
  <div class="container card">
  <div class="col">
    <h1>Subir Archivo</h1>
    <br>
    <form action="../subir_imagenes/subir.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" accept=".pdf, .doc, .docx, .xlsx, .png, .jpg">
        <button type="submit" class="btn btn-success">Subir</button>
    </form>

    <button type="submit" class="btn btn-info">Actualizar</button>
  </div>
  <br>
  </section>
  <!-- /.content -->
</div>
<?php require_once "parte_inferior.php"?>