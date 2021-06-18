
<?php

error_reporting(E_ALL); //<-- para simular produccion

$equipo = $_POST['equipo'];
$marca = $_POST['marca'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['tel'];
$descripcion = $_POST['descripcion'];

$mensaje ='
Correo: '.$correo.'<br>'.
'Tel: '.$tel.'<br>'.
'Nombre: '.$nombre.'<br>'.
'======================================================<br>'.$descripcion.'<br>';




?>

<!DOCTYPE html>
<html>
<head>
<meta content="True" name="HandheldFriendly">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta name="description" content="Centro de Servicio autorizado, y Venta de productos informaticos">
		<meta name="keywords" content="Epson, Brother, Kaiser,Bixolon, Aspel">
		<meta name="author" content="Sistemas Equicsa S.A de C.V.">
		<title>COMPUTODO: Tu mejor opcion!</title>

<style>
body {
			font-family: sans-serif; font-size: 18px;
			margin: 0px;
			padding: 0px;
			text-align: center;
			background-image: url("company/back2.jpg");
			background-repeat:no-repeat;
			color: white;
		}
a {background-color: white; color: #2D518C;
	padding: 10px; 
}

</style>		
</head>
<body>
<?php


require_once('mailer/PHPMailerAutoload.php');


$asunto = $nombre."- ComputodoWeb";
$replymail = $correo;
$replymail_name = $nombre;

$mail_dest  = "no-reply@c2250030.ferozo.com";
$mail_dest_name = "Mensaje de la Pagina Web";

$contenido = $mensaje;

$mail = new PHPMailer;
	// $mail->isSMTP();
    // $mail->SMTPDebug = 2; // 0 = off (for production use)// 1 = client messages// 2 = client and server messages
	$mail->Debugoutput = 'html'; 
    $mail->Host = 'c2250030.ferozo.com';  // use // $mail->Host = gethostbyname('smtp.gmail.com'); 
	// $mail->Helo = "c2250030.ferozo.com";
	$mail->Port = 465; $mail->SMTPSecure = 'tls'; 
    $mail->SMTPAuth = true; 
	$mail->Username = "no-reply@c2250030.ferozo.com"; 
    $mail->Password = "ZL/NtV69mF"; //CUENTA MASTER

	$mail->setFrom('no-reply@c2250030.ferozo.com', $replymail_name); //Quie envia
	$mail->addReplyTo($replymail, $replymail_name); //Reponder a nombre de 
	$mail->addAddress($mail_dest, $mail_dest_name); //Set Destinatario
	$mail->Subject = $asunto;  //Set asunto
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__)); //--- PARA AÑADIR CONTENIDO DESDE UN ARCHIVO
	$mail->msgHTML($contenido);
    // $mail->Body = $contenido;
	// $mail->AltBody = 'El mensaje no puede ser entregado, debido a que su cliente de correo no puede leer el formato html';

	$correo_historia="";
	if ($mail->send()) {
        // ob_end_clean();
        echo 'GRACIAS, EN BREVE nos comunicaremos con usted.<br><br><br><br>
        <br>
        <a href="web.php?s=inicio" title="Regresar"> Regresar a la Pagina Principal </a>
        
        ';

    } else {
        echo "Hubo un error al enviar el correo".$mail->ErrorInfo;
        // var_dump($mail);
    }
?>


</body>
</html>