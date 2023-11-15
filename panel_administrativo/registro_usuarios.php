<?php require_once "parte_superior.php"?>

<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }

    function confirmacion_editar(){
        var respuesta = confirm("¿confirma que desea editar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }

</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->
   

   <!-- INICIO FORMULARIO CAMBIO DE CONTRASEÑA -->
   <br>
   <div class="card container col-md-6">
    <div class="card-body login-card-body">

      <div class="card-body register-card-body">
      <h4 class="login-box-msg">Registra Un Nuevo Usuario</h4>

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
                  <th>Id:</th>
                  <th>Nombres:</th>
                  <th>Correo:</th>
                  <th>Usuario:</th>
                  <th>Fecha Registro:</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include 'conexion.php';

                $sql = $conn->query("SELECT * FROM registro_usuarios");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id']?></th>
                        <th scope="row"><?php echo $resultado['nombre']?></th>
                        <th scope="row"><?php echo $resultado['correo']?></th>
                        <th scope="row"><?php echo $resultado['usuario']?></th>
                        <th scope="row"><?php echo $resultado['fecha_registro']?></th>                       
                        <th>
                            <a href="editar_registro_usuarios.php?Id=<?php echo $resultado['id']?>" class="btn btn-warning" onclick="return confirmacion_editar()">Editar</a>
                            <a href="Eliminar_registro_usuarios.php?id=<?php echo $resultado['id']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>
            </tbody>
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