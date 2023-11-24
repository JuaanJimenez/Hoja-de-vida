<?php
    require_once("../config/conexion.php");
    
    session_destroy();
    header("Localation:".Conectar::ruta()."index.php");
    exit();

?>