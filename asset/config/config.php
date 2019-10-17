<?php
//PARAMETROS INICIALES
$empresa_razon="COMPUTODO";
$empresa="SISTEMAS EQUICSA S.A DE C.V.";
$empresa_tel ="(833) 213 40 03 y 2130 10 37";
$empresa_correo_garantias="gerencia@equicsa.com.mx";
$empresa_correo_soporte="servicio@equicsa.com.mx";
$empresa_correo_ventas="ventas@equicsa.com.mx";
$empresa_correo_gerencia="gerencia@equicsa.com.mx";
$empresa_domicilio="Felipe Resendez No. 102, Col. Lauro Aguirre, Tampico, Tamps. CP. 89140";
$empresa_web = "www.equicsa.com.mx";

$empresa_eslogan="";
$titulodelaspaginas="Computodo online";

$link_default="?css=pc&msg=&"; // lo que va despues de .php

$preciopublico=FALSE;
	//Limito la busqueda
	$TAMANO_PAGINA = 4;

//configuraciones del sistema
date_default_timezone_set('Mexico/General');
$version="0.1b";



//PARAMETROS DE CONEXION A LA BASE DE DATOS
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'online';


	$conexion = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	global $conexion;
	$acentos = $conexion->query("SET NAMES 'utf8'"); // para los acentos


//PARAMETROS DE PREFERENCIA
 	$moneda = 'MXN';
 	$moneda_sufijo ='MXN';
 	global $moneda, $moneda_sufijo;

?>