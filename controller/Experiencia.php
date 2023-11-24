<?php
    require_once("../config/conexion.php");
    require_once("../models/Experiencia.php");
    $experiencia = new Experiencia();

    switch($_GET["op"]){
        case "mostrar":
            $datos = $experiencia->get_experienciaXid($_POST["id"]);
            if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["cargo"] = $row["cargo"];
                $output["funciones"] = $row["funciones"];
                $output["est"] = $row["est"];
            } 
            echo json_encode($output);
        }

            break;

        case "modificar":
            $experiencia->update_experiencia(
            $_POST["id"],
            $_POST["cargo"],
            $_POST["funciones"],
            $_POST["est"],
        );

            break;

        case "guardaryeditar":
            if(empty($_POST["id"])){
            $experiencia->insert_experiencia($_POST["cargo"], $_POST["funciones"], $_POST["est"]);
            }else{
            $experiencia->update_experiencia($_POST["id"], $_POST["cargo"], $_POST["funciones"], $_POST["est"]);
            }
            break;

        case "eliminar":
            $experiencia->delete_experiencia($_POST["id"]);
            break;

        case "listar":
            $datos=$experiencia->get_experiencia();
            $data=Array();
            foreach($datos as $row){
            $sub_array = Array();
            $sub_array[] = $row["cargo"]; 
            $sub_array[] = $row["funciones"];
            $sub_array[] = $row["est"];

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
