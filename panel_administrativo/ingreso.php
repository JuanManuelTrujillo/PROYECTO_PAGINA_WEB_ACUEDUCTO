<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/logo_acueducto.png">
  <title>J.A.A.A | Inicio de Sesión</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="iconos/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.css">
</head>
<style>
    /* Agregar estilos para el botón flotante de ayuda */
    .floating-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      font-size: 18px;
      text-align: center;
      line-height: 50px;
      background-color: #007bff; /* Puedes cambiar el color de fondo según tu preferencia */
      border: none;
      z-index: 1000;
    }
  </style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>Acueducto</b> La Jagua</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg">Inicio de Sesión</h4>

      <form action="conexion_inicio.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario"  placeholder="Usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="contraseña"  placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <!-- /.col -->
         <div class="row">
         <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </div>
      </div>
        <!-- /.col -->
      </form>
      <br>
      <p class="mb-1">
        <a href="../index.php">Regresar</a>
      </p>
      <p class="mb-1">
        <a href="olvido-contraseña.php">Olvidé mi contraseña</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
 <!-- Botón flotante de ayuda -->
 <div class="floating-button">
 <a href="ayuda_manuales/ayuda_manuales.php" class="btn " data-toggle="tooltip modal" data-placement="left" data-bs-target="#exampleModal" title="Ayuda">
      <i class="fas fa-question"></i>
    </a>
  </div>
  

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</html>
