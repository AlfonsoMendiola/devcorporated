<?php

require_once '../models/cotizacion.php';

class cotizacionController{

    public function guardar(){
        
        if(isset($_POST)){
            $cotizacion = new Cotizacion();
            $cotizacion->setNombre($_POST['nombre']);
            $cotizacion->setApellidos($_POST['apellidos']);
            $cotizacion->setCorreo($_POST['correo']);
            $cotizacion->setNombreNegocio($_POST['nombre_negocio']);
            $cotizacion->setGiroNegocio($_POST['giro_negocio']);
            $cotizacion->setServicio($_POST['servicio']);
            $cotizacion->setEspecificaciones($_POST['especificaciones']);
            $cotizacion->guardar();
        }
        header("Location:../index.php?page=cotcorrect");
        
    }
}
$cot = new cotizacionController();
$cot->guardar();






?>