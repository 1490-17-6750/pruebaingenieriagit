<?php

    class conexion{
            protected $conexion_db;
            public function Conexion(){
            $this->conexion_db=new mysqli("localhost","root","","bdempresa");
            if($this->conexion_db->connect_errno){
            echo 'Fallo al conectar mysql '. $this->conexion_db->connect_error;
            return;
            }
            $this->conexion_db->set_charset("UTF8");
        }
    }
?>