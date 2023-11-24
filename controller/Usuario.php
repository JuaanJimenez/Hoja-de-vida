<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();

    switch($_GET["op"]){
        case "mostrar":
            $datos = $usuario->get_usuariosXid($_POST["id"]);
            if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["nombre"] = $row["nombre"];
                $output["apellidoPaterno"] = $row["apellidoPaterno"];
                $output["apellidoMaterno"] = $row["apellidoMaterno"];
                $output["correo"] = $row["correo"];
                $output["password"] = $row["password"];
                $output["sexo"] = $row["sexo"];
                $output["telefono"] = $row["apellidoPaterno"];
                $output["estado"] = $row["estado"];

            } 
            echo json_encode($output);
        }

            break;

        case "modificar":
            $usuario->update_usuarios(
            $_POST["id"],
            $_POST["nombre"],
            $_POST["apellidoPaterno"],
            $_POST["apellidoMaterno"],
            $_POST["correo"],
            $_POST["password"],
            $_POST["sexo"],
            $_POST["telefono"],
            $_POST["estado"],
        );

            break;

        case "guardaryeditar":
            if(empty($_POST["id"])){
            $usuario->insert_usuarios($_POST["nombre"], $_POST["apellidoPaterno"], $_POST["apellidoMaterno"], $_POST["correo"], $_POST["password"], $_POST["sexo"], $_POST["telefono"], $_POST["estado"]);
            }else{
            $usuario->update_usuarios($_POST["id"], $_POST["nombre"], $_POST["apellidoPaterno"], $_POST["apellidoMaterno"], $_POST["correo"], $_POST["password"], $_POST["sexo"], $_POST["telefono"], $_POST["estado"],);
            }
            break;

        case "eliminar":
            $usuario->delete_usuarios($_POST["id"]);
            break;

        case "listar":
            $datos=$usuario->get_usuarios();
            $data=Array();
            foreach($datos as $row){
            $sub_array = Array();
            $sub_array[] = $row["nombre"]; 
            $sub_array[] = $row["apellidoPaterno"];
            $sub_array[] = $row["apellidoMaterno"];
            $sub_array[] = $row["correo"];
            $sub_array[] = $row["password"];
            $sub_array[] = $row["sexo"];
            $sub_array[] = $row["telefono"];
            $sub_array[] = $row["estado"];

            $sub_array[] = '<button type="button" onClick="editar"('.$row["id"].');" id="'.$row["id"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            
            $sub_array[] = '<button type="button" onClick="eliminar"('.$row["id"].');" id="'.$row["id"].'"
            class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';

            $data[]=$sub_array;
            }
            

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;
    }
?>
