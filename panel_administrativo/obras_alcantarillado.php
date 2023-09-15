<?php require_once "parte_superior.php"?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">OBRAS ALCANTARILLADO</h1>

        </div><!-- /.col -->
        
       <!-- modal-content -->
        <div class="col-6">
          <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-default">Registrar Usuarios</button>
            </div>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Formulario Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>
                      <!-- forms -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Formulario Registro</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-6">
                              <input type="text" class="form-control" placeholder="Nombres">
                            </div>
                            <div class="col-6">
                              <input type="text" class="form-control" placeholder="Apellidos">
                            </div>
                          </div>
                          <br>
                          <div class="row">
                          <div class="col-12">
                          <input type="text" class="form-control" placeholder="Correo Electrónico">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-6">
                          <input type="text" class="form-control" placeholder="Edad">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-12">
                          <input type="text" class="form-control" placeholder="Teléfono">
                          </div>
                        </div>
                        </div>
                      </div>
                       <!--/..forms -->

                    </p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
      </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
  
  
  
  
      <!-- Main content -->
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
              <h3 class="card-title">Usuarios Registrados:</h3>
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