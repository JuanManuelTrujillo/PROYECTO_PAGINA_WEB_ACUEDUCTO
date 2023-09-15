<?php require_once "parte_superior.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <!-- /.login-logo -->

   <!-- INICIO FORMULARIO CAMBIO DE CONTRASEÑA -->
   <br>
   <div class="card container col-md-5">
    <div class="card-body login-card-body">

      <div class="card-body register-card-body">
      <p class="login-box-msg">Registra una nueva cuenta</p>

      <form action="conexion_registro.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre completo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="correo" name="correo"  placeholder="Correo Electrónico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="usuario" name="usuario"   placeholder="Usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="contraseña" name="contraseña"   placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="acepta_terminos" value="agree" required>
              <label for="agreeTerms">
               Acepto<a href="#"> terminos y condiciones</a>
              </label>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="row">
        <div class="col-12">
        <input  type="submit" class="btn btn-primary btn-block" value="Registrar">
          
        </div>
      </div>
        <!-- /.col -->
      </form>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
  <!-- FIN FORMULARIO CAMBIO DE CONTRASEÑA -->
</div>
<!-- /.login-box -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once "parte_inferior.php"?>