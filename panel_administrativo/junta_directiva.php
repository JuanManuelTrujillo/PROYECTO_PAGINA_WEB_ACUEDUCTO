<?php require_once "parte_superior.php"?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">JUNTA DIRECTIVA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
  <!-- Content Wrapper. Contains page content -->

   
    <!-- /.content-header -->

<!-- INICIO DE CONTENIDO -->

<div class="container">
  <div class="container">
    <!-- select -->
    <?php

error_reporting( ~E_NOTICE ); // avoid notice
	
require_once 'junta_conexion.php';

if(isset($_POST['btnsave']))
{
  $username = $_POST['user_name'];// user name
  $userjob = $_POST['user_job'];// user email
  
  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];
  
  
  if(empty($username)){
    $errMSG = "Ingrese la marca";
  }
  else if(empty($userjob)){
    $errMSG = "Ingrese el tipo.";
  }
  else if(empty($imgFile)){
    $errMSG = "Seleccione el archivo de imagen.";
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
    $stmt = $DB_con->prepare('INSERT INTO junta(Imagen_Marca,Imagen_Tipo,Imagen_Img) VALUES(:uname, :ujob, :upic)');
    $stmt->bindParam(':uname',$username);
    $stmt->bindParam(':ujob',$userjob);
    $stmt->bindParam(':upic',$userpic);
    
    if($stmt->execute())
    {
      $successMSG = "Nuevo registro insertado correctamente ...";
      header("refresh:3;junta_directiva.php");
      exit;
       // redirects image view page after 5 seconds.
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

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery.min.js"></script>
</head>
<body>

<div class="container">

</div>
</div>
<div class="container">

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
  <table class="table table- table-responsive">
    <tr>
      <td><label class="control-label">Nombre Apellido</label></td>
      <td><input class="form-control" type="text" name="user_name" placeholder="Ingrese nombre y Apellido"  ></td>
    </tr>
    <tr>
      <td><label class="control-label">Rool</label></td>
      <td><input class="form-control" type="text" name="user_job" placeholder="Ingrese tipo de rool"  ></td>
    </tr>
    <tr>
      <td><label class="control-label">Imágen.</label></td>
      <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    <tr>
    <form action="procesar_formulario.php" method="post">
    <!-- Tu contenido de formulario aquí -->

    <td colspan="2">
        <button type="submit" name="btnsave" class="btn btn-success" formaction="junta_agregar.php">
            <span class="glyphicon glyphicon-save"></span> Guardar
        </button>
    </td>
</form>

   
    </tr>
  </table>
</form>
<?php

     
        
// Archivo de conexion con la base de datos
require_once 'junta_conexion.php';
// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id']))
{
// Selecciona imagen a borrar
$stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM junta WHERE Imagen_ID =:uid');
$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
// Ruta de la imagen
unlink("imagenes/".$imgRow['Imagen_Img']);

// Consulta para eliminar el registro de la base de datos
$stmt_delete = $DB_con->prepare('DELETE FROM junta WHERE Imagen_ID =:uid');
$stmt_delete->bindParam(':uid',$_GET['delete_id']);
$stmt_delete->execute();
// Redireccioa al inicio
return("Location: junta_directiva.php");
}

?>


<hr>
</div>


<center><h1>Junta Administradora</h1></center>


<div class="container">
  <div class="row">
    <div class="col-12" style="height: 300px; overflow-x: auto; border: 1px solid #ddd;">
      <!-- Contenido de tu página aquí -->
      <!-- Puedes agregar más contenido dentro de este div -->
     
      <!-- Fin del contenido -->
      <style>
      .tarjeta {
          border: 1px solid #ddd;
          border-radius: 8px;
          overflow: hidden;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
          margin-bottom: 20px;

         
      }

      .tarjeta .cuerpo {
          padding: 15px;
      }

      .tarjeta img {
         

          border-radius: 100%; /* Hace que la imagen sea redonda */
      object-fit: cover;
      width: 100%;
      height: 200px;
     
      }

      .tarjeta .titulo {
          background-color: #f8f9fa;
          padding: 10px;
          text-align: center;
          font-weight: bold;
      }

      .tarjeta .pie {
          text-align: right;
          padding: 10px;
      }
      @media (max-width: 768px) {
      .tarjeta {
          max-width: 80%;
      }
  }
  </style>
      
<div class="container">
<div class="container">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</div>
<br />
<div class="">
  <?php

$stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img FROM junta ORDER BY Imagen_ID DESC');
$stmt->execute();

if($stmt->rowCount() > 0)
{
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
    extract($row);
    ?>
  <div class=" col-sm-4">


<div class="tarjeta">
<div class="titulo">
</div>
<div class="cuerpo">
<img src="imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-rounded"  style="width:100%" height="250px"  >

<p class="d-inline-flex gap-1">
<center></p>


          
<?php echo  $Imagen_Marca."&nbsp;/
  &nbsp;" .$Imagen_Tipo ; ?>
      </p>
      <p class="page-header"> <span> <a class="btn btn-info" href="junta_editar.php?edit_id=<?php echo $row['Imagen_ID']; ?>" title="click for edit" onclick="return confirm('Esta seguro de editar el archivo ?')"><span class="glyphicon glyphicon-edit"></span> Editar</a> <a class="btn btn-danger" href="junta_agregar.php?delete_id=<?php echo $row['Imagen_ID']; ?>" title="click for delete" onclick="return confirm('Esta seguro de eliminar el archivo?')"><span class="glyphicon glyphicon-remove-circle"></span> Borrar</a> </span> </p>
  






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
           

           </div>









           </div>
  </div>
</div>
     <br>

<!-- FIN DE CONTENIDO -->
  </div>
  <?php require_once "parte_inferior.php"?>