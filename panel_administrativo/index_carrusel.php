<?php require_once "parte_superior.php"?>
<?php
include "conexion_carrusel.php";
$images = get_imgs();
?>
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar esta imagen?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1 class="m-5 text-center">CARRUSEL DE IMAGENES</h1>
  <br>
  <a href="agregar_carrusel.php" class="btn m-0 btn-success">Agregar Imagen</a> 
		<br><br>
		<?php if(count($images)>0):?>
<table class="table table-bordered">
					<thead>
						<th>Imagenes:</th>
						<th>Descripción Imagen:</th>
            <th>Opciones:</th>
					</thead>
			<?php foreach($images as $img):?>
				<tr>
				<td><img src="<?php echo $img->folder.$img->src; ?>" style="width:1000px;">				</td>
				
        <td><?php echo $img->title; ?></td>
				<td>
				<a class="btn btn-warning" href="descargar_carrusel.php?id=<?php echo $img->id; ?>">Descargar</a> 
				<a class="btn btn-danger" onclick="return confirmacion()" href="eliminar_carrusel.php?id=<?php echo $img->id; ?>">Eliminar</a>
			</td>
				</tr>
			<?php endforeach;?>
</table>
		<?php else:?>

			<h4 class="alert alert-warning">No hay imagenes!</h4>
		<?php endif; ?>
    </section>
  <!-- /.content -->
</div>

<?php require_once "parte_inferior.php"?>