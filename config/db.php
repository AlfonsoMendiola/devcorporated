<?php

class Database{

    public function conectar(){
        $conexion = new mysqli('localhost', 'root', '','devcorporated',3308);
        $conexion->query("SET NAMES 'utf8' ");
        return $conexion;
    }
}


?>