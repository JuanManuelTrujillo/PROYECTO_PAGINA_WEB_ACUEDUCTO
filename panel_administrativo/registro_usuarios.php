<?php require_once "parte_superior.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-center">Registro de Usuarios</h1>
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

      <div class="card-body register-card-body">
      <h4 class="login-box-msg">Registra una nueva cuenta</h4>

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
        <!-- /.col -->
        <div class="row">
        <div class="col-12">
        <input  type="submit" class="btn btn-primary btn-block" value="Registrar Usuario">
          
        </div>
      </div>
        <!-- /.col -->
      </form>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
  <!-- FIN FORMULARIO CAMBIO DE CONTRASEÑA -->
  <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
              
                <!-- /.card-header -->
                
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class=" text-center">Usuarios Registrados:</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Edad</th>
                  <th>Correo Electrónico</th>
                  <th>Teléfono</th>
                </tr>
                </thead>
                <tbody>
        


                <tr>
                  <td>Yulieth</td>
                  <td>Vanegas</td>
                  <td>18</td>
                  <td>yfacundo@gmail.com</td>
                  <td>3167039524</td>
                </tr>
                <tr>
                  <td>Juan</td>
                  <td>Trujillo</td>
                  <td>17</td>
                  <td>trujillo27@gmail.com</td>
                  <td>3153640383</td>
                </tr>

                <tr>
                  <td>Paula</td>
                  <td>Cano</td>
                  <td>19</td>
                  <td>pcano@gmail.com</td>
                  <td>3232507436</td>
                </tr>
 
                <tr>
                  <td>Juana</td>
                  <td>Walles</td>
                  <td>20</td>
                  <td>walles@gmail.com</td>
                  <td>317593729</td>
                </tr>
                <tr>
                  <td>Sofia</td>
                  <td>Zambrano</td>
                  <td>23</td>
                  <td>aafia@gmail.com</td>
                  <td>3214658923</td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>



  
  <?php require_once "parte_inferior.php"?>