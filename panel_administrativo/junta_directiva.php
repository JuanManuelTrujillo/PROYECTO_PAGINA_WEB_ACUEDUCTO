<?php require_once "parte_superior.php"?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">JUNTA DIRECTIVA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Noticias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- INICIO DE CONTENIDO -->

<div class="card container col-md-6">
  <div class="col-sm-12">
    <!-- select -->
    <div class="form-group">
      <br>
      <label>Tipos de informes:</label>
      <select class="form-control">
        <option selected disabled>--seleciona los usuarios--</option>
        <option>Registrados</option>
        <option>Desabilitados</option>
        <option>Eliminados</option>
        <option>Modificados</option>
      </select>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="form-group">
      <label>Fecha inicio:</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="far fa-calendar-alt"></i>
          </span>
        </div>
        <input type="date" class="form-control float-right" id="reservation">
      </div>
      <!-- /.input group -->
    </div>
  </div>
  <div class="col-sm-12">
    <div class="form-group">
      <label>Fecha fin:</label>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="far fa-calendar-alt"></i>
          </span>
        </div>
        <input type="date" class="form-control float-right" id="reservation">
      </div>
      <!-- /.input group -->
    </div>
  </div>
  <button type="submit" class="col-sm-4 btn btn-primary">Generar Reportes</button>
  <br>
</div>
<!-- FIN DE CONTENIDO -->
  </div>
  <?php require_once "parte_inferior.php"?>