<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ingreso.php");
    exit();
}

$tipo_usuario= $_SESSION['nombre_usuario'];


// Aquí puedes mostrar el contenido de la página de inicio para usuarios autenticados
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/logo_acueducto.png">
  <title>Panel Administrativo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="iconos/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="css/icheck-bootstrap.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="css/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <div class="Text-center">
      <h5>Acueducto y Alcantarillado La Jagua Huila</h5>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">
          <b><?php echo $tipo_usuario;?></b></a>
        </li>
        
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="user-panel">
            <div class="icon">
            <i class="fa-solid fa-user"></i>
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="perfil-usuarios.php" class="dropdown-item">
            <i class="fa-solid fa-user"></i>  Tu Perfil
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="olvido-contraseña-panel.php" class="dropdown-item">
            <i class="fa-solid fa-lock"></i>  Cambiar Contraseña
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="registro_usuarios.php" class="dropdown-item">
            <i class="fa-solid fa-circle-xmark"></i> Registrar Usuario
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="cerrar_sesion.php" class="dropdown-item">
            <i class="fa-solid fa-circle-xmark"></i> Cerrar Sesión
            <span class="float-right text-muted text-sm"></span>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/logo.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><h5>Panel Administrativo</5></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
              <a href="index_carrusel.php" class="nav-link">
              <i class="fa-sharp fa-regular fa-images"></i>
              <p>
                  Carrusel Imagenes
                <span class="right badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="noticias.php" class="nav-link">
            <i class="fa-solid fa-newspaper"></i>
              <p>
                Targetas de Noticias
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="Junta_directiva.php" class="nav-link">
              <i class="fa-solid fa-users"></i>
              <p>
                Junta Directiva
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="canal_atencion.php" class="nav-link">
            <i class="fa-solid fa-comments"></i>
              <p>
                Canales de Atención
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="obras_acueducto.php" class="nav-link">
              <i class="fa-solid fa-helmet-safety"></i>
              <p>
              Obras Acueducto
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="obras_alcantarillado.php" class="nav-link">
            <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>
              Obras Alcantarillado
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
