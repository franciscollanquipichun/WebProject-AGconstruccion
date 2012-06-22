<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$correo_electronico= $_POST['email']; 
$poblacion = $_POST['poblacion']; 
$sexo=$_POST['GrupoOpciones1']; 
$aficiones=$_POST['comentarios']; 
$radio= $_POST['GrupoOpciones2']; 
$opinion=$_POST['opinion']; 
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n"; 
$mensaje .= "aficiones " . $_POST['comentarios'] . " \r\n"; 
$mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n"; 
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'francisco.llanquipichun@gmail.com'; 
$asunto = 'correo de prueba'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 
</body>
</html>