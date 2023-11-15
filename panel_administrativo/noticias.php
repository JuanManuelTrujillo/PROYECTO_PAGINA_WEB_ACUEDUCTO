<?php require_once "parte_superior.php"?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <h1 class="mm-5 text-center">TARGETAS DE NOTICIAS</h1>
<!-- INICIO DE CONTENIDO -->
<?php

	error_reporting(E_NOTICE ); // avoid notice
	
	require_once 'Conexion_noticia.php';
	
	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($username)){
			$errMSG = "Ingrese el Tíulo";
		}
		else if(empty($userjob)){
			$errMSG = "Ingrese Descripción";
		}
		else if(empty($imgFile)){
			$errMSG = "Selecciona una imagen";
		}
		else
		{
			$upload_dir = 'imagenes/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '1MB'
				if($imgSize < 1000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Su archivo es muy grande.";
				}
			}
			else{
				$errMSG = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tbl_imagenes(Imagen_Marca,Imagen_Tipo,Imagen_Img) VALUES(:uname, :ujob, :upic)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			
			if($stmt->execute())
			{
				$successMSG = "Nuevo registro insertado correctamente ...";
				header("refresh:3;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "Error al insertar ...";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Subir, Insertar, Actualizar, Borrar una imágen usando PHP y MySQL</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="page-header">
    <h1 class="h3">Agregar Noticias:</h1>
  </div>
  <?php
	if(isset($errMSG)){
			?>
  <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong> </div>
  <?php
	}
	else if(isset($successMSG)){
		?>
  <div class="alert alert-success"> <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong> </div>
  <?php
	}
	?>
  <form method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
      <tr>
        <td><label class="control-label">Titulo Noticia:</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Ingrese Título" value="" /></td>
      </tr>
      <tr>
        <td><label class="control-label">Descripcion Noticia:</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Ingrese Descripción" value="" /></td>
      </tr>
      <tr>
        <td><label class="control-label">Selecciona una Imagen:</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-success"> <span class="glyphicon glyphicon-save"></span> &nbsp; Subir Noticia</button></td>
      </tr>
    </table>
  </form>
  <?php
// Archivo de conexion con la base de datos
require_once 'Conexion_noticia.php';
// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id']))
{
	// Selecciona imagen a borrar
	$stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM tbl_imagenes WHERE Imagen_ID =:uid');
	$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
	// Ruta de la imagen
	unlink("imagenes/".$imgRow['Imagen_Img']);
	
	// Consulta para eliminar el registro de la base de datos
	$stmt_delete = $DB_con->prepare('DELETE FROM tbl_imagenes WHERE Imagen_ID =:uid');
	$stmt_delete->bindParam(':uid',$_GET['delete_id']);
	$stmt_delete->execute();
	// Redireccioa al inicio
	header("Location: index.php");
}

?>

<div class="container">
  <div class="page-header">
  
  </div>
  <br />
  <div class="">
    <?php
	
	$stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img FROM tbl_imagenes ORDER BY Imagen_ID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
    <div class=" col-sm-3">

	
  <div class="tarjeta"  >
<div class="titulo"><h3 class="page-header" >
	<?php echo $Imagen_Marca."&nbsp;
	  &nbsp;" ?></h3></strong></div>
<div class="cuerpo">
<img src="imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-rounded"  style="width:100%" height="170px"  >

<p class="d-inline-flex gap-1">


<!-- Modal --> 




</p>

<details>
        <summary>Leer más</summary>
        <p>
            
	<?php echo "&nbsp;&nbsp;".$Imagen_Tipo; ?>
        </p>
    </details>
	<p class="page-header"> <span> <a class="btn btn-info" href="Editar_noticia.php?edit_id=<?php echo $row['Imagen_ID']; ?>" title="click for edit" onclick="return confirm('Esta seguro de editar el archivo ?')"><span class="glyphicon glyphicon-edit"></span> Editar</a> <a class="btn btn-danger" href="?delete_id=<?php echo $row['Imagen_ID']; ?>" title="click for delete" onclick="return confirm('Esta seguro de eliminar el archivo?')"><span class="glyphicon glyphicon-remove-circle"></span> Borrar</a> </span> </p>



 


</div>

     
  

<div class="pie">
<!-- Button trigger modal -->



</div>
</div>
     <br>
	 
    </div>
	
    <?php
		}
	}
	else
	{
		?>
    <div class="col-sm-12">
      <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
    </div>
    <?php
	}
	
?>



  </div>
  <!-- FIN DE CONTENIDO -->
  </section>
  <!-- /.content -->
</div>


</body>
</html>
  <?php require_once "parte_inferior.php"?>