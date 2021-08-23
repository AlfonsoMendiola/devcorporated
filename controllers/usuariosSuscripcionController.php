<?php

require_once '../models/usuariosSuscripcion.php';

class usuariosSuscripcionController{

    public function guardar(){
        
        if(isset($_POST)){
            $usuario = new usuariosSuscripcion();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setCorreo($_POST['correo']);
            $usuario->guardar();
        }
        header("Location:../index.php?page=subscorrect");
        
        
    }
}
$nuevo = new usuariosSuscripcionController();
$validacion = $nuevo->guardar();



?>