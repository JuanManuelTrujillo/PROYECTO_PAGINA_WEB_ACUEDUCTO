<?php
include 'panel_administrativo/Conexion_noticia.php';
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>HighTech - IT Solutions Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css_contenido/style.css">

    </head>

    <body>
       


        <!-- Inicio noticia -->
        <div class="container">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
        <h1>SECCION NOTICIAS</h1>
    </div>
    <div class="row g-5 justify-content-center">
        <?php
        $stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img, fecha_modificacion FROM noticias ORDER BY Imagen_ID DESC');
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
        ?>
                <div class="col-lg-2 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="panel_administrativo/imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-fluid w-100 rounded-top" alt="Imagen referente a la noticia">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop_<?php echo $Imagen_ID; ?>" class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Ver Noticia Completa</a>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <br>
                            <br>
                            <br>
                            <h5 class=""><?php echo $Imagen_Marca . "&nbsp;&nbsp;"; ?></h5>
                            <span class="text-secondary"><?php echo $row['fecha_modificacion']; ?></span>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        </div>
                    </div>
                </div>
        
         <!-- Modal -->
  <div class="modal fade" id="staticBackdrop_<?php echo $Imagen_ID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $Imagen_Marca. "&nbsp;&nbsp;"; ?></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <img src="panel_administrativo/imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-fluid w-100 rounded-top" alt="Imagen referente a la noticia">
        <p><?php echo "&nbsp;&nbsp;".$Imagen_Tipo; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerra</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->
  <?php
            }
        }
        else
	{
		?><div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div><?php
	}
        ?>
    </div>
</div>
<!-- Fin noticias -->






        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>