
<link rel="stylesheet" type="text/css" href="css/stylescotizacion.css">
<link rel="stylesheet" type="text/css" href="css/responsivecotizacion.css">

<div id="particles-js">


<section class="cotizacion">
    
    
    <form action="controllers/cotizacionController.php" method="POST" id="formulario-cotizacion">

        <h2 class="titulos">Realiza tu proyecto con nosotros</h2>

        <label for="nombre" class="prosa">Tu nombre</label>
        <input type="text" name="nombre" required>

        <label for="apellidos" class="prosa">Tus apellidos</label>
        <input type="text" name="apellidos">

        <label for="correo" class="prosa">Correo de contacto</label>
        <input type="email" name="correo" required>

        <label for="nombre_negocio" class="prosa">Nombre de tu negocio</label>
        <input type="text" name="nombre_negocio">

        <label for="giro_negocio" class="prosa">Giro de tu negocio</label>
        <input type="text" name="giro_negocio" required>

        <label for="servicio" class="prosa">¿Que tipo de servicio necesitas?</label>
        <select name="servicio" class="lista-servicios">
            <option value="desarrollo-web">Desarrollo Web</option>
            <option value="seo">SEO</option>
            <option value="ensamble">Ensambre de PC</option>
            <option value="redes">Diseño de la red de tu oficina</option>
            <option value="rediseño">Rediseño de tu pagina web</option>
        </select>

        <label for="especificaciones" class="prosa">Escribe tus necesidades especificas del servicio</label>
        <textarea name="especificaciones"></textarea>
        <button type="submit" class="boton prosa">Enviar</button>
    </form>

</section>
 
</div>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>