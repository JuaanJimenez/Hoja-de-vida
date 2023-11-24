<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../html/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../html/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"]; ?>">
          <a href="#" class="d-block"><?php echo $_SESSION["nombre"]." ".$_SESSION["ape_paterno"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../html/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../html/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../html/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>-->
          <li class="nav-item">
            <a href="Principal.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Usuario.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="estudios.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Estudios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Experiencia.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Experiencia
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Habilidades.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Habilidades
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="SocialMedia.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Redes Sociales
              </p>
            </a>
          </li>
          
          <li class="nav-header">CERRAR SESION</li>
          <li class="nav-item">
            <a href="Logout.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                SALIR
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>