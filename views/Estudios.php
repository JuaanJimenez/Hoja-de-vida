<?php

use function PHPSTORM_META\type;

  define("BASE_URL","/Proyecto/views/");
  require_once("../config/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once("modulos/head.php");
    ?>
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <?php
    require_once("modulos/menu.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="card">
        <div class="card-header">
        <h3 class="card-title">Estudios</h3>
        </div>

        
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <div class="card-body">
            <button class="btn btn-primary" onclick="nuevo()">Nuevo</button>
        <table id="estudios_data" class="table table-bordered table-striped">
        <tr>
        <th>Id</th>
        <th>Institucion</th>
        <th>Fecha inicio</th>
        <th>Fecha finalizacion</th>
        <th>Nivel</th>
        <th>Estado</th>
        </tr>
        </thead>
        
        </table>
        </div>

        </div>

        </div>

        </div>

        </div>

        </section>

        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php
        require_once("modulos/footer.php");
    ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<?php require_once("mntModalEstudio.php");?>

<?php
    require_once("modulos/js.php");
?>
<script type="text/javascrpt" src="js/socialMedia.js"></script>
    

</body>
</html>