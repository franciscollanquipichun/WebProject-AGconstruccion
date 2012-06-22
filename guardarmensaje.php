<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>AGconstruccion - contactenos</title>
	<meta name="description" content="Página de contacto para AGconstrucciones, empresa especialista en soldadura y confección de carros, piesas agricolas, reparacion de maquinarias pesadas en general">
	<meta name="author" content="Francisco Llanquipichun">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/libs/modernizr-2.0.6.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<div id="header-container">
		<header class="wrapper clearfix">
			<br><div id="title"><h1>AG</h1><h2> construcción</h2></div>
			<nav>
				<ul>
                	<li><a href="index.html">Inicio</a></li>
                    <li><a href="productos_servicios.html">Productos y Servicios</a></li>
                    <li><a href="acerca_de_nosotros.html">Acerca de Nosotros</a></li>
					<li><a href="contactenos.html">Contactenos</a></li>
					<li><a href="galeria.html">Galeria de Imágenes</a></li>
				</ul>
			</nav>
		</header>
	</div>
 <div id="main-container"><!-- contenedor del contenido principal-->
		<div id="main" class="wrapper clearfix"><!-- contenido principal -->
			
			<article>
				<header>  
			
<?php

	$nombre = $_POST['nombre'];
	$apellio = $_POST['apellido'];
	$organizacion = $_POST['organizacion'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$web = $_POST['web'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$mail_destinatario = 'francisco.llanquipichun@gmail.com';//construccion.ag@hotmail.com
		 
		
		//almasenar en base de datos		
		$link = mysql_connect("localhost","root","123456asd");
		mysql_select_db("ejemploAG",$link);
		$sql = "insert into contacto(nombre,apellido,organizacion,telefono,email,web,asunto,mensaje)";
		$sql .= "values('$nombre','$apellido','$organizacion','$telefono','$email','$web','$asunto','$mensaje')";
		$result = mysql_query($sql);
		
		echo'<h3 style="color: orange;">El mensaje se ha guardado </h3>';
		
		//enviar correo
		 if (form_mail("usuario@suweb.com", 
                 "Activación de formulario", 
                 "Los datos introducidos en el formulario son:nn", 
                 "tu@tuweb.com" 
                 ) 
         ) 
         echo "Su formulario ha sido enviado con exito";
		
		function form_mail($sPara, $sAsunto, $sTexto, $sDe){ 

         if ($sDe)$sDe = "From:".$sDe; 

         foreach ($_POST as $nombre => $valor) 
              $sTexto = $sTexto."n".$nombre." = ".$valor; 

         return(mail($sPara, $sAsunto, $sTexto, $sDe));}
		
		 

?>


					<h1>Contactenos</h1>	
                    <p>Estamos dispuestos a contestar cualquier duda que tenga sobre su futuro proyecto, y como lo ayudaremos a llevarlo a cabo; estamos a su servicio.</p>				
				</header>
                
			  <section>
				  <h2>Formulario de Contacto</h2>                  
					<form id="formulario" name="formularioContacto" method="post" action="guardarmensaje.php" >
						<h3>Datos personales:</h3>
                        <fieldset>
                        	<ul>
								<li>
                                	<label for="nombre">Nombre</label>
                                	<input type="text" name="nombre" id="nombre" placeholder="Su Nombre" maxlength="25" autofocus required/>
                                </li>
                            	<li>
                                	<label for="nombre">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" placeholder="Su Apellido" maxlength="25" required/>
                                </li>
                            	<li>
                                	<label for="nombre">Organización</label>
                                   	<input type="text" name="organizacion" id="organizacion" placeholder="Organización a la que pertenece" maxlength="25"required/>
                                </li>
                            	<li>
                                	<label for="nombre">Telefono</label>
                                   	<input type="tel" name="telefono" placeholder="ej: 064-xxxxxx o 09xxxxxxx" id="telefono" maxlength="10" required/>
                                </li>
                            	<li>
                                	<label for="nombre">E-mail</label>
                                    <input type="email" name="email" id="email" placeholder="Su Correo Electronico" maxlength="50" required/>
                                </li>
                            	<li>
                                	<label for="nombre">Direccion Web</label>
                                    <input type="url" name="web" id="web" placeholder="Su Dirección de Internet" maxlength="50"/>
                                </li>
                            </ul>
                            <h3>Mensaje:</h3>
                            <ul>	
                                <li>
                                	<label for="nombre">Asunto</label>
                                	<input type="text" name="asunto" id="asunto" maxlength="25" required/>
                                </li>
                            	<li>
                                	<label for="nombre">Mensaje</label>
                                	<textarea name="mensaje" cols="50" rows="5" placeholder="Escriba aquí su Mensaje" onKeyUp="return maximaLongitud(this,250)" required/></textarea>
                                </li>
                            	<li>
                            		<small>Maximo caracteres: 250</small>
                                </li>
                            	<li>
                                	<input type="submit" name="enviar" id="enviar" value="Enviar">
                                    <input type="reset" name="limpiar" id="limpiar" value="Limpiar">
                                </li>
                            </ul>
                    	</fieldset>
					</form>
			  </section>
              
              <section>
              	<div id="CollapsiblePanel1" class="spoiler">
                  <div><h3>Sobre este Formulario</h3></div>
                    <div ><p>La información que nos proporcione en este formulario se enviara directamente como correo electrónico a <a href="mailto:direccion de correo">nombre correo</a> y además se guardara en nuestra Base de Datos, solo con el fin de mantener un registro de respaldo.</p></div>
                </div>
             </section>
             
             
              <section>
              	<div id="CollapsiblePanel2" class="spoiler">
                    <div><h3><a name="ayuda" id="ayuda">Ayuda de Formulario</a></h3></div>
                        <div ><p>Todos los campos destacados de color rojo son obligatorios. Acontinuación la descripción de cada campo:</p>
                        <ul>
                            <li>Nombre: campo obligatorio, máximo 25 caracteres alfanuméricos.</li>
                            <li>Apellido: campo obligatorio, máximo 25 caracteres alfanuméricos.</li>
                            <li>Organización: campo obligatorio, máximo 25 caracteres alfanuméricos.</li>
                            <li>Teléfono: campo obligatorio, máximo 10 caracteres. Ej: 09xxxxxxxx, 064-xxxxxx</li>
                            <li>e-mail: campo obligatorio, máximo 50 caracteres. Ej: micuenta@hotmail.com</li>
                            <li>Dirección Web: máximo 50 caracteres alfanuméricos. Ej: www.miweb.com</li>
                            <li>Asunto: campo obligatorio, máximo 25 caracteres alfanuméricos.</li>
                            <li>Mensaje: campo obligatorio , máximo 250 caracteres alfanuméricos.</li>
                        </ul></div>
                </div>  
              </section>              
			</article>
			
			<aside>
				<h3 style="text-align:center;">Información de Contacto</h3>
				<p style="text-align:center;">Alberto Gómez Gallardo<br>
                construccion.ag@hotmail.com<br>
                Celular: 98434233<br>
                Osorno</p>
			</aside>

		</div>
	</div>

	<div id="footer-container">
		<footer class="wrapper">
			<h4>AGconstrucción - Alberto Gomez Construcción - Los abetos #1183 Franke, Osorno - Fono: 98434233 - <a href="mailto:construccion.ag@hotmail.com">construccion.ag@hotmail.com</a></h4>
		</footer>
	</div>




<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<script src="js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->
</body>
</html>