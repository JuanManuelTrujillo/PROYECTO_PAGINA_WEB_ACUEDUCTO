<?php
include 'panel_administrativo/Conexion_noticia.php';
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/iconos/logo_acueducto.png">
        <title>J.A.A.A La Jagua Huila</title>
        <title ng-bind="main.seo.title">ACUEDUCTO Y ALCANTARILLADO CENTRO POBLADO LA JAGUA HUILA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="author" content="ADSO Sena Ficha 2502629">
        <meta name="description" content="Junta Administradora de Acueducto y Alcantarillado Centro Poblado La Jagua Huila">
        <meta name="keywords" content="Acueducto La Jagua Huila,la Jagua Garzón Huila, Garzón Huila, Junta Administradora acueducto y alcantarillado La Jagua Huila">
        <meta property="og:type" content="website">
        <meta property="og:url" nosune-meta-tags="main.seo.url" content="https://acueducto.adsosena.com/">
        <meta property="og:title" nosune-meta-tags="main.seo.title" content="ACUEDUCTO Y ALCANTARILLADO CENTRO POBLADO LA JAGUA HUILA">
        <meta property="og:description" nosune-meta-tags="main.seo.description" content="Junta Administradora de Acueducto y Alcantarillado Centro Poblado La Jagua Huila">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="418">


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
        <link href="css/estilo.css" rel="stylesheet">
        
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="info container-fluid py-2 d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="text-tobar-direct me-3 text-light-50"><a href="https://www.google.com/maps/@2.1669501,-75.6789125,3a,75y,185.45h,82.57t/data=!3m6!1e1!3m4!1sCyGpC4DQUquZq9P-7WEfxw!2e0!7i13312!8i6656?entry=ttu" target="_blank"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Calle 4 número 2- Barrio San José La Jagua Huila</small>
                        <small class="text-tobar me-3 text-light-50"><a href="mailto:juanperdomotorre.13@gmail.com"><i class="fas fa-envelope me-2 text-secondary"></i></a>acueductoalcant_lajagua@hotmail.com</small>
                    </div>
                    <div class="top-link">
                        <a href="https://wa.me/+573227324944" target="_blank" class="ico-topbar bg-secondary nav-fill btn btn-sm-square rounded-circle"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="ico-topbar bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="navegacion container-fluid">
            <div class="container-fluid">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <img src="img/iconos/logo_acueducto.png" class="logo img-fluid" alt="Logo Acueducto Centro Poblado La Jagua Huila.">

                    <a href="index.php" class="titulo navbar-brand">
                        <h1 class="titulo titulo-acued text-white fw-bold d-block">Acueducto y Alcantarillado <span>La Jagua Huila</span></h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="index.php" class="nav-item nav-link active text-secondary">Inicio</a>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nuestra Empresa</a>
                                <div class="dropdown-menu rounded">
                                    <a href="nuestra_empresa/historia.php" class="dropdown-item">Historia</a>
                                    <a href="nuestra_empresa/mision_vision.php" class="dropdown-item">Misión y Visión </a>
                                    <a href="nuestra_empresa/junta_administradora.php" class="dropdown-item">Nuestra Junta Administradora</a>
                                    <a href="nuestra_empresa/funciones-generales.php" class="dropdown-item">Funciones Generales</a>
                                    <a href="nuestra_empresa/glosario.php" class="dropdown-item">Glosario</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Atención y Servicios</a>
                                <div class="dropdown-menu rounded">
                                    <a href="atencion_servicios/canales.php" class="dropdown-item">Canales de Atención</a>
                                    <a href="atencion_servicios/PQRS.php" class="dropdown-item">PQRS</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Acueducto y Alcantarillado</a>
                                <div class="dropdown-menu rounded">
                                    <a href="acueducto_alcantarillado/infraestructura.php" class="dropdown-item">Infraestructura del Acueducto</a>
                                    <a href="acueducto_alcantarillado/plan_maestro.php" class="dropdown-item">Plan Maestro de Abastecimiento</a>
                                    <a href="acueducto_alcantarillado/abastecimiento.php" class="dropdown-item">Sistema de Abastecimiento</a>
                                    
                                    
                                    <a href="acueducto_alcantarillado/obras.php" class="dropdown-item">Obras</a>
                                    <li><hr class="dropdown-divider"></li>
                                    <a href="acueducto_alcantarillado/sistema_drenaje.php" class="dropdown-item">Sistema de Drenaje</a>
                                    <a href="acueducto_alcantarillado/PTAR.php" class="dropdown-item">PTAR Lagunas de Oxidación</a>
                                    <a href="acueducto_alcantarillado/mapas.php" class="dropdown-item">Mapas Acueducto | Alcantarillado</a>
                                </div>
                            </div>
                            <a href="enseñanza/fuentes.php" class="nav-item nav-link">Enseñanza</a>
                            <a href="transparencia/transparencia.php" class="nav-item nav-link">Transparencia</a>

                           
                        </div>
                        <a href="panel_administrativo/ingreso.php" target="_blank" class="me-2"><button type="button" class="btn-sesion px-4 py-sm-2 px-sm-4 btn btn-secondary rounded-pill" style=" color: white;">Iniciar Sesión</button></a>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="container-fluid-12">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $conexion = new mysqli("127.0.0.1", "root", "root", "u684809565_acueducto");
            $resultado = $conexion->query("SELECT * FROM imagenes_carousel ORDER BY id DESC");

            $first = true; // Para marcar la primera imagen como activa

            while ($row = $resultado->fetch_assoc()) {
                $activeClass = $first ? 'active' : ''; // Añadir la clase 'active' a la primera imagen
                echo '<div class="carousel-item ' . $activeClass . '">
                        <img src="data:' . $row["tipo_archivo"] . ';base64,' . base64_encode($row["datos_archivo"]) . '" class="d-block w-100"  alt="Imagenes Carousel' . $row["nombre_archivo"] . '">
                      </div>';
                $first = false; // Después de la primera iteración, establecerlo como falso
            }

            if ($resultado->num_rows > 0) {
                // Entrar al bucle while y mostrar las imágenes
            } else {
                echo "No se encontraron imágenes en la base de datos.";
            }
            $conexion->close();
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
<br>
<br>
        <!-- Inicio noticia -->
        <div class="container">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
        <h1>SECCION DE NOTICIAS</h1>
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
                        <img src="panel_administrativo/imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-fluid w-100 rounded-top" style="max-height: 200px;" alt="Imagen referente a la noticia">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop_<?php echo $Imagen_ID; ?>" class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Ver Noticia Completa</a>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <br>
                            <br>
                            <br>
                            <h5 class=""><?php echo $Imagen_Marca . "&nbsp;&nbsp;"; ?></h5>
                            <span class="text-secondary"><b>Fecha: </b> <?php echo $row['fecha_modificacion']; ?></span>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                        </div>
                    </div>
                </div>
        
         <!-- Modal -->
  <div class="modal fade" id="staticBackdrop_<?php echo $Imagen_ID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $Imagen_Marca. "&nbsp;&nbsp;"; ?></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <img src="panel_administrativo/imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-fluid w-100 rounded-top" alt="Imagen referente a la noticia">
        <br>
        <br>
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
<br>
<br>
<br>
<!-- Footer Start -->
<div class="container-fluid footer  wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <a href="index.php">
                        <h1 class="titulo-footer text-white fw-bold d-block">Junta Administradora de Acueducto y Alcantarillado La Jagua Huila<span class="text-secondary"> NIT.800254912-4</span> </h1>
                    </a>
                    <div class="col-lg-3 col-md-6">
                        <p class="mt-4 text-light">La Junta Administradora del acueducto y alcantarillado de La Jagua es una entidad Sin Ánimo de Lucro obtuvo su personería jurídica el 21 de febrero de 1995.</p>
                        <div class="d-flex hightech-link">
                            <a href="#" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="https://wa.me/+573227324944" target="_blank" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="bi bi-whatsapp text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Horarios de Atención</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Lunes a Viernes</a>
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>8:00 am a 12:00 pm</a>
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>3:00 pm a 5:00 pm</a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Puntos de Recaudo</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i><b>Papeleria Pipelin:</b> Calle 4 número 5-21 Barrio San José</a>
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i><b>Corresponsal Bancolombia:</b> Calle número 5 3-25 Barrio San Martín</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Contactos</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="https://www.google.com/maps/@2.1669501,-75.6789125,3a,75y,185.45h,82.57t/data=!3m6!1e1!3m4!1sCyGpC4DQUquZq9P-7WEfxw!2e0!7i13312!8i6656?entry=ttu" target="_blank" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i>Calle 4 número 2- Barrio San José La Jagua Huila</a>
                            <a href="https://wa.me/+573227324944" target="_blank" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i>3227324944</a>
                            <a href="mailto:juanperdomotorre.13@gmail.com" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i>acueductoalcant_lajagua @hotmail.com</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="index.php" class="text-secondary"><i class="fas fa-copyright me-2"></i>Acueducto La Jagua Huila</a>, Todos los derechos reservados.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Diseñado Por <a href="https://adsosena.com/" target="_blank" class="text-secondary">ADSO 2502629 </a>CADPH Garzón Huila.</span>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>