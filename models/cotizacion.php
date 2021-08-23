<?php

include_once '../config/db.php';

class Cotizacion{
    private $id;
    private $nombre;
    private $apellidos;
    private $correo;
    private $nombre_negocio;
    private $giro_negocio;
    private $servicio;
    private $especificaciones;
    private $fecha;
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
    public function setApellidos($apellidos){
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }
    public function setCorreo($correo){
        $this->correo = $this->db->real_escape_string($correo);
    }
    public function setNombreNegocio($nombre_negocio){
        $this->nombre_negocio = $this->db->real_escape_string($nombre_negocio);
    }
    public function setGiroNegocio($giro_negocio){
        $this->giro_negocio = $this->db->real_escape_string($giro_negocio);
    }
    public function setServicio($servicio){
        $this->servicio = $servicio;
    }
    public function setEspecificaciones($especificaciones){
        $this->especificaciones = $this->db->real_escape_string($especificaciones);
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getNombreNegocio(){
        return $this->nombre_negocio;
    }
    public function getGiroNegocio(){
        return $this->giro_negocio;
    }
    public function getServcio(){
        return $this->servicio;
    }
    public function getEspecificaciones(){
        return $this->especificaciones;
    }
    public function getFecha(){
        return $this->fecha;
    }

    public function guardar(){
        $sql = "INSERT INTO cotizacion VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getCorreo()}', '{$this->getNombreNegocio()}', '{$this->getGiroNegocio()}', '{$this->getServcio()}', '{$this->getEspecificaciones()}', CURDATE());";
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