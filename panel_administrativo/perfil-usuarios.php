<?php require_once "parte_superior.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perfil de Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="img/user2-160x160.jpg"
                         alt="User profile picture">
                  </div>

                  <p class="text-muted text-center">Software Developer</p>
                
                  <strong><i class="fas fa-book mr-1"></i>Nombre</strong>
  
                  <p class="text-muted">
                  Juan Manuel Trujillo
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Correo Electrónico</strong>
  
                  <p class="text-muted">Juanperdomotorre.13@gmail.com</p>
  
                  <hr>
  
                  <strong><i class="fas fa-pencil-alt mr-1"></i> Estudios</strong>
  
                  <p class="text-muted">
                    <span class="tag tag-info">Tecnólogo en Análisis y Desarrollo de Software</span>
                  </p>
  
                  <hr>
  
                  <strong><i class="far fa-file-alt mr-1"></i> Habilidades</strong>
  
                  <p class="text-muted">Soy una persona responsable y respetuosa.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
    
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                  
                    <li class="nav-item bg-primary"><a class="nav-link" href="#settings" data-toggle="tab">Actualización Datos</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                     
                    <div class="tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Correo Electrónico</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Correo Electrónico">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Estudios</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Estudios"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Habilidades</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Habilidades">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Actualizar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

    <!-- /.content -->
  </div>
  <?php require_once "parte_inferior.php"?>