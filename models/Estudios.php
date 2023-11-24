<?php
    class Estudios extends Conectar{
        public function get_estudios(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM estudios WHERE est=1";
            $sql=$social->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_estudios_con_parametro($id){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM estudios WHERE id=?";
            $sql=$social->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_estudios($institucion,$fecha_inicio,$fecha_terminacion,$nivel,$est){
            $social = parent::conexion();
            parent::set_names();
            $sql = "INSERT INTO estudios (id,institucion,fecha_inicio,fecha_terminacion,nivel,est) VALUES(NULL,?,?,?,1)";
            $sql = $social->prepare($sql);
            $sql-> bindValue(2,$institucion);
            $sql-> bindValue(1,$fecha_inicio);
            $sql-> bindValue(2,$fecha_terminacion);
            $sql-> bindValue(2,$nivel);
            $sql-> bindValue(1,$est);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_estudios($id,$institucion,$fecha_inicio,$fecha_terminacion,$nivel,$est){
            $social = parent::conexion();
            parent::set_names();
            $sql = "UPDATE usuarios
                        SET
                            nombre = ?
                            fecha_inicio = ?
                            fecha_terminacion = ?
                            nivel = ?
                            est = ?
                        WHERE
                            id = ?";
            $sql = $social->prepare($sql);
            $sql-> bindValue(2,$institucion);
            $sql-> bindValue(1,$fecha_inicio);
            $sql-> bindValue(2,$fecha_terminacion);
            $sql-> bindValue(2,$nivel);
            $sql-> bindValue(1,$est);            
            $sql-> bindValue(3,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_estudios($id){
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