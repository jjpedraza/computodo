
<?php
$correo = "servicio@equicsa.com.mx";
$nombre = "Equicsa";
$asunto = "prueba";

$msg ="<h1>HOLA </h1>";
$msg = $msg."".$nombre."<br>";
$msg = $msg."<br>";
$msg = $msg."Mensaje de prueba<br>";
$msg = $msg."<img src='http://computodotampico.com/img/banner/epson.jpg'>";
$msg = $msg."<br>";
$msg = $msg."<br>";
$msg = $msg."Pepe Pedraza";

$para      = 'tecnopix@outlook.com';



$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabeceras .= 'To: '.$para.''. "\r\n";
$cabeceras .= 'From: '.$nombre.' <'.$correo.'>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";


mail($para, $asunto, $msg, $cabeceras);

?>
