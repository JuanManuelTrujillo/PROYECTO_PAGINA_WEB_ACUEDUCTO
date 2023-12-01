<?php
include "panel_administrativo/conexion_carrusel.php";
 $images = get_imgs();
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
        <meta property="og:image" nosune-meta-tags="main.seo.image" content="http://www.empugaresp.gov.co/sites/empresas-publicas-de-garzon/content/files/000001/1_entidad_1200x800.png">


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
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

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

<!-- Carousel Start -->

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php if(count($images)>0):?>
<!-- aqui insertaremos el slider -->
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicatodores -->
  <ol class="carousel-indicators">
<?php $cnt=0; foreach($images as $img):?>
    <li data-target="#carousel1" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
<?php $cnt++; endforeach; ?>
  </ol>

  <!-- Contenedor de las imagenes -->
  <div class="carousel-inner" role="listbox">
<?php $cnt=0; foreach($images as $img):?>
    <div class="item <?php if($cnt==0){ echo 'active'; }?>">
      <img src="<?php echo 'panel_administrativo/'.$img->folder.$img->src; ?>" alt="Imagenes carrousel">
    </div>
<?php $cnt++; endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>

</div>
<?php else:?>
  <h4 class="alert alert-warning">No hay imagenes </h4>
<?php endif; ?>
</div>
</div>
</div>


                <?php
// Archivo de conexion con la base de datos
require_once 'panel_administrativo/Conexion_noticia.php';
// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id']))
{
	// Selecciona imagen a borrar
	$stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM noticias WHERE Imagen_ID =:uid');
	$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
	// Ruta de la imagen
	unlink("imagenes/".$imgRow['Imagen_Img']);
	
	// Consulta para eliminar el registro de la base de datos
	$stmt_delete = $DB_con->prepare('DELETE FROM noticias WHERE Imagen_ID =:uid');
	$stmt_delete->bindParam(':uid',$_GET['delete_id']);
	$stmt_delete->execute();
	// Redireccioa al inicio
	header("Location: index.php");
}

?>

<style>
/* Estilos para la tarjeta de noticias */
.tarjeta {
  border: 1px solid #ddd; /* Borde delimitador de la tarjeta */
  border-radius: 10px; /* Bordes redondeados */
  overflow: hidden; /* Oculta el contenido que se desborda */
  margin-bottom: 20px; /* Espacio entre tarjetas */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

.tarjeta:hover {
  transform: scale(1.05); /* Efecto de escala al pasar el ratón */
  transition: transform 0.3s ease-in-out; /* Animación suave */
}

/* Estilos para el título de la tarjeta */
.tituloo {
  background-color:#1361c4; /* Color de fondo del título */
  color:#333; /* Color del texto del título */
  padding: 10px; /* Espaciado interno del título */
  border-bottom: 1px solid #ddd; /* Borde inferior del título */
}


/* Estilos para el título de la tarjeta con efecto de marquesina */
/* Estilos para el título de la tarjeta */
.tituloo h3 {
    white-space: nowrap; /* Evita que las palabras se rompan en varias líneas por defecto */
    overflow: hidden; /* Oculta el contenido que desborda el contenedor */
    text-overflow: ellipsis; /* Añade puntos suspensivos (...) al final del texto si se corta */
    transition: all 0.3s ease; /* Agrega una transición suave */

    /* Personaliza otros estilos según tus necesidades */
    color: #FFFFFF; /* Color del texto */
    background-color:#1361c4; /* Color de fondo */
    padding: 5px; /* Espaciado interno */
}

/* Estilos cuando el mouse está sobre el título */
.tituloo h3:hover {
    white-space: normal; /* Permite que el texto se envuelva y se muestre completo */
    overflow: visible; /* Muestra todo el contenido */
}




/* Estilos para el cuerpo de la tarjeta */
.cuerpo {
  padding: 15px; /* Espaciado interno del cuerpo */
  text-align: center; /* Centra el texto dentro del cuerpo */
}

/* Estilos para la imagen de la tarjeta */
.tarjeta img {
  border-radius: 8px; /* Bordes redondeados para la imagen */
}

/* Estilos para el resumen dentro del detalle */
tarjeta details p {
  margin: 10px 0; /* Margen del resumen dentro del detalle */
}

/* Animación de transición para el resumen dentro del detalle */
tarjeta details summary {
  transition: color 0.3s ease-in-out; /* Animación suave de color */
}

tarjeta details summary:hover {
  color: #007bff; /* Cambia el color al pasar el ratón sobre el resumen */

}
h1.text-primary {
    font-family: 'Arial', sans-serif;
    font-size: 2.5em;
    color: #333; /* Color del texto */
    background-color: #f8f9fa; /* Color de fondo gris claro */
    padding: 15px; /* Espaciado interno */
    border-radius: 10px; /* Esquinas redondeadas */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
    display: flex;
    align-items: center; /* Centra verticalmente el contenido */
    justify-content: center; /* Centra horizontalmente el contenido */
}

h1.text-primary i {
    margin-right: 10px; /* Espaciado a la derecha del icono */
}

h1.text-primary .fa-exclamation-triangle {
    color: #ff6347; /* Color del icono (rojo) */
}






</style>

<center><h1 class="text-primary">Noticias</h1></center>

</div>
<div class="container">
  <div class="">

  <link rel="stylesheet" href="panel_administrativo/bootstrap/css/bootstrap.min.css">
  </div>
  <br />
  <div class="">
    <?php
	
	$stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img, fecha_modificacion FROM noticias ORDER BY Imagen_ID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
    <div class=" col-sm-3">

	
     <div class="tarjeta">
      <div class="tituloo ">
	 <center><h3 class="" >  <!-- Modifique -->
	 <?php echo $Imagen_Marca."&nbsp;
 	  &nbsp;" ?></h3></center></div>
     <div class="cuerpo">
       <img src="panel_administrativo/imagenes/<?php echo $row['Imagen_Img']; ?>" class="img-rounded"  style="width:100%" height="170px"  >
      
        <p class="d-inline-flex gap-1">
        <p> <i style="  font-size: 15px;" >Última modificación: <?php echo $row['fecha_modificacion']; ?></i></p>
      </p>
      
       <details style="font-size:15px">

        <summary style="font-size:15px" >ver noticia </summary>
      

        <p >
            
	     <?php echo "&nbsp;&nbsp;".$Imagen_Tipo; ?>
        </p>
       </details>



 


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