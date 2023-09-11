<?php require_once "parte_superior.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cambio de Contraseña</h1>
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
   <div class="card container col-md-6">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Estás a un paso de tu nueva contraseña, cambia tu contraseña ahora.</p>

      <form action="olvido-contraseña.php" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirmar contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Cambiar la contraseña</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
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