<?php


if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'servicios':
            include_once 'views/servicios.php';
            break;
        case 'ofertas':
            include_once 'views/ofertas.php';
            break;
        case 'cotizacion':
            include_once 'views/cotizacion.php';
            break;
        case 'subscorrect':
            include_once 'views/subscorrect.php';
            break;
        case 'cotcorrect';
            include_once 'views/cotcorrect.php';
            break;
        default:
            include_once 'views/inicio.php';
            break;
    }

}else{
    include_once 'views/inicio.php';
}





?>