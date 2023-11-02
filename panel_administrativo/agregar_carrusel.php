<?php require_once "parte_superior.php"?>
<div class="content-wrapper">
	<br>
	<br>
<div class="container card">
  <div class="col">
    <h1 class="text-center">Subir Imagenes a Carrusel</h1>
    <br>
	<form enctype="multipart/form-data" method="post" action="upload_carrusel.php">

<div class="form-group">
  <label for="exampleInputPassword1">Descripión Imagen:</label>
  <input type="text"  name="title" class="form-control"  placeholder="Añade una descripción">
</div>
<div class="form-group">
  <label for="exampleInputFile"></label>
  <input type="file" name="image" required>
</div>

	  <input type="submit" value="Subir imagen" class="btn btn-success">
	  </form>

  </div>
  <br>
  </section>
  <!-- /.content -->
</div>
</div>

		
<?php require_once "parte_inferior.php"?>

