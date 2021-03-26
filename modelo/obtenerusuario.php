<?php
require_once('conexion.php');
    class obtenerusuario extends Conexion{
        public function obtenerusuario(){
        parent:: __construct();
        }
        public function obtenerusuarios($usuario, $pass){
            $sql= $this->conexion_db->query("SELECT *FROM bp_clientes where nombre='$usuario' and password='$pass'");
            $resultado=$sql->fetch_all(MYSQLI_ASSOC);
            return $resultado;   
        }       
        public function listar(){
            $sql= $this->conexion_db->query("SELECT *FROM bp_productos where oferta='S'");
            $resultado=$sql->fetch_all(MYSQLI_ASSOC);
            return $resultado;   
        }
        public function codigo($codigo){
            $sql= $this->conexion_db->query("SELECT *FROM bp_productos where codigo like '%".$codigo."%'");
            $resultado=$sql->fetch_all(MYSQLI_ASSOC);
            return $resultado;   
        }
        public function descripcion($descripcion){
            $sql= $this->conexion_db->query("SELECT *FROM bp_productos where descripcion like '%".$descripcion."%'");
            $resultado=$sql->fetch_all(MYSQLI_ASSOC);
            return $resultado;   
        }
        public function precios($precios){
            $sql= $this->conexion_db->query("SELECT *FROM bp_productos where precio_venta like '%".$precios."%' OR precio_oferta like '%".$precios."%'");
            $resultado=$sql->fetch_all(MYSQLI_ASSOC);
            return $resultado;   
        }
    }
?>