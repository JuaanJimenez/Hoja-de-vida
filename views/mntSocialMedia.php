<?php
  define( "BASE_URL", "/Portafolio/views/");

  /* Llamamos al archivo de conexion.php */
  require_once("../config/conexion.php");
  if(isset($_SESSION["usu_id"])):
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("modulos/MainHead.php"); ?>

    <title>Redes Sociales</title>
  </head>

  <body>

    <?php require_once("modulos/MainMenu.php"); ?>

    <?php require_once("modulos/MainHeader.php"); ?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Mis Redes Sociales</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Mis Redes Sociales</h4>
        <p class="mg-b-0">Mantenimiento</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mantenimiento</h6>
            <p class="mg-b-30 tx-gray-600">Redes Sociales</p>

            <button class="btn btn-outline-primary" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Nuevo Registro</button>

            <p></p>

            <div class="table-wrapper"></div>
                <table id="socialMedia_data" class="table display responsive wrap">
                <thead>
                    <tr>
                    <th class="wd-15p">Icono</th>
                    <th class="wd-15p">Enlace</th>
                    <th class="wd-10p"></th>
                    <th class="wd-10p"></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>

    <?php require_once("mntModalsocialmedia.php"); ?>

    <?php require_once("modulos/MainJs.php"); ?>
    <script type="text/javascript" src="js/mntsocialMedia.js"></script>
  </body>
</html>
<?php
  else:
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."view/404/");
?>
<?php endif; ?>