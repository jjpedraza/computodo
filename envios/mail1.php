<?php
require_once('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
//indico a la clase que use SMTP
$mail­>IsSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
$mail­>SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$mail­>SMTPAuth = true;
$mail­>SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$mail­>Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail­>Port = 465;




$msg ="<h1>HOLA </h1>";
$msg = $msg."".$nombre."<br>";
$msg = $msg."<br>";
$msg = $msg."Mensaje de prueba<br>";
$msg = $msg."<img src='http://computodotampico.com/img/banner/epson.jpg'>";
$msg = $msg."<br>";
$msg = $msg."<br>";
$msg = $msg."Pepe Pedraza";


//indico un usuario / clave de un usuario de gmail
$mail­>Username = "eltecnicodelpueblo@gmail.com";
$mail­>Password = "fallingskies13";
$mail­>SetFrom('eltecnicodelpueblo@gmail.com', 'Pepe Pedraza');
$mail­>AddReplyTo("eltecnicodelpueblo@gmail.com","Pepe Pedraza");
$mail­>Subject = "Envío de email usando SMTP de Gmail";
$mail­>MsgHTML("".$msg);

//indico destinatario
$address = "ventas@computodotampico.com";
$mail­>AddAddress($address, "Ventas de Computodo");

if(!$mail­>Send()) 
{
	echo "Error al enviar: " . $mail­>ErrorInfo;
} 
else 
{
	echo "Mensaje enviado!";
}

?>