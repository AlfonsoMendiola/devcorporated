<?php

include_once '../config/db.php';

class usuariosSuscripcion{
    private $id;
    private $nombre;
    private $correo;
    private $db;

    public function __construct(){
        $base = new Database();
        $this->db = $base->conectar();
    }
    
    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    public function setCorreo($correo){
        $this->correo = $this->db->real_escape_string($correo);
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }

    public function guardar(){
        $sql = "INSERT INTO usuarios_suscripcion VALUES(NULL, '{$this->getNombre()}', '{$this->getCorreo()}');";
        $guardar = $this->db->query($sql);

        $result = false;
        if($guardar){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}




?>