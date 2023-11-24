<?php
    class Experiencia extends Conectar{
        public function get_experiencia(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM experiencia WHERE est=1";
            $sql=$social->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_experiencia_con_parametro($id){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM experiencia WHERE id=?";
            $sql=$social->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_experiencia($cargo,$funciones,$est){
            $social = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO experiencia (id,cargo,funciones,est) VALUES(NULL,?,?,1)";
            $sql = $social->prepare($sql);
            $sql-> bindValue(1,$cargo);
            $sql-> bindValue(2,$funciones);
            $sql-> bindValue(1,$est);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_experiencia($id,$cargo,$funciones,$est){
            $social = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios
                        SET
                            cargo = ?
                            funciones = ?
                            est = ?
                        WHERE
                            id = ?";
            $sql = $social->prepare($sql);
            $sql-> bindValue(3,$id);
            $sql-> bindValue(1,$cargo);
            $sql-> bindValue(2,$funciones);            
            $sql-> bindValue(1,$est);            
            
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_experiencia($id){
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