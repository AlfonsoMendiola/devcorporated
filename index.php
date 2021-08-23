<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/stylegeneral.css">
        <link rel="stylesheet" type="text/css" href="css/stylesindex.css">
        <link rel="stylesheet" type="text/css" href="css/responsiveindex.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
        <link rel="icon" type="image/jpg" href="imagenes/icono2.jpg">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        
        <script type="text/javascript" src="js/main.js"></script>
        
        
        <title>DevCorporated</title>
    </head>
    <body>
    <!--Proyecto desarrollado por Alfonso Mendiola Navarro para UTEL-->
    
    
                

        <header id="cabecera">
            
            <?php
            include_once 'views/menu.php';
            ?>
            
        </header>
        
        <?php
            include_once 'controllers/frontal.php';

        ?>
        
        
        <center>
        <footer id="pie">
            <?php
            include_once 'views/pie.php';
            ?>
        </footer>
        </center>
        
       
        
    </body>
</html>