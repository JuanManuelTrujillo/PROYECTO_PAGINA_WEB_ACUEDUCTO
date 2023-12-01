<?php require_once "parte_superior.php"?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">OBRAS ACUEDUCTO</h1>


          </div><!-- /.col -->
        
        <!-- modal-content -->
        <?php
 // Archivo de conexion con la base de datos
 require_once 'obras_conexion.php';
 // Condicional para validar el borrado de la imagen
 if(isset($_GET['delete_id']))
 {
   // Selecciona imagen a borrar
   $stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM obras WHERE Imagen_ID =:uid');
   $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
   $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
   // Ruta de la imagen
   unlink("imagenes1/".$imgRow['Imagen_Img']);
   
   // Consulta para eliminar el registro de la base de datos
   $stmt_delete = $DB_con->prepare('DELETE FROM obras WHERE Imagen_ID =:uid');
   $stmt_delete->bindParam(':uid',$_GET['delete_id']);
   $stmt_delete->execute();
   // Redireccioa al inicio
   
 }
 
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" />
 <title>Subir imagen al servidor usando PDO MySQL</title>
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.min.css">
 <script src="bootstrap1/js/jquery.min.js"></script>
 </head>
 
 <body>
 <div class="navbar navbar-default navbar-static-top" role="navigation">
   <div class="container">
   <div class="page-header">
     <h1 class="h2">Mostrar todos.  <a class="btn btn-default" href="obras_agregar.php"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Agregar nuevo</a></h1>
   </div>
 </div>
 </div>
 <div class="container">
 <div class="page-header">
   <br />
   <div class="row">
     <?php
   
   $stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img FROM obras ORDER BY Imagen_ID DESC');
   $stmt->execute();
   
   if($stmt->rowCount() > 0)
   {
     while($row=$stmt->fetch(PDO::FETCH_ASSOC))
     {
       extract($row);
       ?>
     <div class="col-xs-3"><center>
       <p class="page-header"><?php echo $Imagen_Marca."&nbsp".$Imagen_Tipo; ?></p>
       <img src="imagenes1/<?php echo $row['Imagen_Img']; ?>" class="img-rounded" width="250px" height="250px" />
       <p class="page-header"> <span> <a class="btn btn-info" href="obras_editarImagen.php?edit_id=<?php echo $row['Imagen_ID']; ?>" title="click for edit" onclick="return confirm('Esta seguro de editar el archivo ?')"><span class="glyphicon glyphicon-edit"></span> Editar</a> <a class="btn btn-danger" href="obras_acueducto.php?delete_id=<?php echo $row['Imagen_ID']; ?>" title="click for delete" onclick="return confirm('Esta seguro de eliminar el archivo?')"><span class="glyphicon glyphicon-remove-circle"></span> Borrar</a> </span> </p>
     </div>
     <?php
     }
   }
   else
   {
     ?>
     <div class="col-xs-12">
       <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
     </div>
     <?php
   }
   
 ?>










          



        </div><!-- /.col -->
        </div><!-- /.container-fluid -->
      
  <!-- /.content -->
</div>
<?php require_once "parte_inferior.php"?>