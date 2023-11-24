<?php
    class Habilidades extends Conectar{
        public function get_habilidades(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM habilidades WHERE est=1";
            $sql=$social->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_habilidades_con_parametro($id){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM habilidades WHERE id=?";
            $sql=$social->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_habilidades($nombre,$descripcion,$est){
            $social = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO habilidades (id,nombre,descripcion,est) VALUES(NULL,?,?,1)";
            $sql = $social->prepare($sql);
            $sql-> bindValue(1,$nombre);
            $sql-> bindValue(2,$descripcion);
            $sql-> bindValue(1,$est);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_habilidades($id,$nombre,$descripcion,$est){
            $social = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios
                        SET
                            nombre = ?
                            descripcion = ?
                            est = ?
                        WHERE
                            id = ?";
            $sql = $social->prepare($sql);
            $sql-> bindValue(3,$id);
            $sql-> bindValue(1,$nombre);
            $sql-> bindValue(2,$descripcion);            
            $sql-> bindValue(1,$est);            
            
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_habilidades($id){
            $social = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est = 0 WHERE id=?";
            $sql = $social->prepare($sql);
            $sql-> bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>