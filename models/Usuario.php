<?php
class Usuario extends Conectar{
    public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["correo"];
                $password = $_POST["passwd"];
                if(empty($correo) and empty($password)){
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE correo=? and password=? and estado=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1,$correo);
                    $stmt->bindValue(2,$password);
                    $stmt->execute();
                    $resultado = $stmt->fetch();

                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["ape_paterno"]=$resultado["ape_paterno"];
                        $_SESSION["correo"]=$resultado["correo"];
                        header("Location:".Conectar::ruta()."views/principal.php");
                        exit();
                    
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>