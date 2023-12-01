<?php

error_reporting(~E_NOTICE); // avoid notice

require_once 'obras_conexion.php';

if (isset($_POST['btnsave'])) {
    $username = $_POST['user_name']; // user name

    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if (empty($username)) {
        $errMSG = "Ingrese la marca";
    } else if (empty($imgFile)) {
        $errMSG = "Seleccione el archivo de imagen.";
    } else {
        $upload_dir = 'imagenes1/'; // upload directory

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

        // valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

        // rename uploading image
        $userpic = rand(2000, 2000000) . "." . $imgExt;

        // allow valid image file formats
        if (in_array($imgExt, $valid_extensions)) {
            // Check file size '1MB'
            if ($imgSize < 2000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $userpic);
            } else {
                $errMSG = "Su archivo es muy grande.";
            }
        } else {
            $errMSG = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";
        }
    }

    // if no error occurred, continue ....
    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('INSERT INTO obras(Imagen_Marca, Imagen_Img) VALUES(:uname, :upic)');
        $stmt->bindParam(':uname', $username);
        $stmt->bindParam(':upic', $userpic);

        if ($stmt->execute()) {
            $successMSG = "Nuevo registro insertado correctamente ...";
            header("obras_acueducto.php"); // redirects image view page after 3 seconds.
        } else {
            $errMSG = "Error al insertar ...";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Subir, Insertar, Actualizar, Borrar una imagen usando PHP y MySQL</title>
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.min.css">
    <script src="bootstrap1/js/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <div class="page-header">
        <h1 class="h3">Agregar nueva imagen. <a class="btn btn-default" href="obras_acueducto.php"> <span
                        class="glyphicon glyphicon-eye-open"></span> &nbsp; Mostrar todo </a></h1>
    </div>
    <?php
    if (isset($errMSG)) {
        ?>
        <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong> </div>
        <?php
    } else if (isset($successMSG)) {
        ?>
        <div class="alert alert-success"> <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong> </div>
        <?php
    }
    ?>
    <form method="post" enctype="multipart/form-data" class="form-horizontal">
        <table class="table table-bordered table-responsive">
            <tr>
                <td><label class="control-label">Titulo</label></td>
                <td><input class="form-control" type="text" name="user_name" placeholder="Ingrese el titulo" value="">
                </td>
            </tr>
            <tr>
                <td><label class="control-label">Imagen.</label></td>
                <td><input class="input-group" type="file" name="user_image" accept="image/*"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default"> <span
                                class="glyphicon glyphicon-save"></span> &nbsp; Guardar Imagen </button></td>
            </tr>
        </table>
    </form>

</div>

<script src="bootstrap1/js/bootstrap.min.js"></script>
</body>
</html>
