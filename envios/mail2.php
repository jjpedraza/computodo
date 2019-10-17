<?php
require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';
   
$mail = new PHPMailer();   
    
$mail->IsSMTP();   
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPDebug  = 0;
$mail->Port = 465; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure="ssl";
$mail->Username = 'eltecnicodelpueblo@gmail.com'; 
$mail->Password = 'fallingskies13'; 

$mail->From = "eltecnicodelpueblo@gmail.com";   
$mail->FromName = "Pruebas";   
$mail->Subject = "Pruebas";   
$mail->AddAddress("servicio@equicsa.com.mx");   
   
//$mail->WordWrap = 50;   
   
$body  = "Hi, es un…";   
$body .= "mensaje de prueba exitoso";   
   
$mail->Body = $body;   
   
if( !$mail->Send() ) 
{  
    echo "No se pudo enviar el Mensaje.";   
} 
else 
{   
    echo "Mensaje enviado";   
}   
   


?>