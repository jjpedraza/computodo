
<?php
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


$para      = 'ventas@computodotampico.com';
$titulo    = '( '.$equipo.'-'.$marca.' ) '.$nombre;
$mensaje   =$mensaje;

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$cabeceras .= 'To: '.$para.''. "\r\n";
$cabeceras .= 'From: '.$nombre.' <'.$correo.'>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";




mail($para, $titulo, $mensaje, $cabeceras);
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


GRACIAS <?php echo $nombre; ?>, EN BREVE nos comunicaremos con usted.<br><br><br><br>
<br>
<a href="web.php?s=inicio" title="Regresar"> Continuar </a>
</body>
</html>