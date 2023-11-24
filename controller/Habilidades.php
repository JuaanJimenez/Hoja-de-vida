<?php
    require_once("../config/conexion.php");
    require_once("../models/Habilidades.php");
    $habilidades = new Habilidades();

    switch($_GET["op"]){
        case "mostrar":
            $datos = $habilidades->get_habilidadesXid($_POST["id"]);
            if(is_array($datos)==true and count($datos)<>0){
            foreach($datos as $row){
                $output["nombre"] = $row["nombre"];
                $output["descripcion"] = $row["descripcion"];
                $output["est"] = $row["est"];
            } 
            echo json_encode($output);
        }

            break;

        case "modificar":
            $habilidades->update_habilidades(
            $_POST["id"],
            $_POST["nombre"],
            $_POST["descripcion"],
            $_POST["est"],
        );

            break;

        case "guardaryeditar":
            if(empty($_POST["id"])){
            $habilidades->insert_habilidades($_POST["nombre"], $_POST["descripcion"], $_POST["est"]);
            }else{
            $habilidades->update_habilidades($_POST["id"], $_POST["nombre"], $_POST["descripcion"], $_POST["est"]);
            }
            break;

        case "eliminar":
            $habilidades->delete_habilidades($_POST["id"]);
            break;

        case "listar":
            $datos=$habilidades->get_habilidades();
            $data=Array();
            foreach($datos as $row){
            $sub_array = Array();
            $sub_array[] = $row["nombre"]; 
            $sub_array[] = $row["descripcion"];
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
