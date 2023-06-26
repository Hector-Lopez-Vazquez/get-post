<?php

//$nombre = $_POST["nombre"];
//$email = $_POST["email"];
//$telefono = $_POST["telefono"];
//$sitio = $_POST["sitio"];
//$asunto = $_POST["asunto"];
//$mensaje = $_POST["mensaje"];

$Nombre = $_GET["Nombre"];
$Email = $_GET["Email"];
$Telefono = $_GET["Telefono"];
$Sitio = $_GET["Sitio"];
$Asunto = $_GET["Asunto"];
$Mensaje = $_GET["Mensaje"];


echo $Nombre." ". $Email." ". $Telefono."".$Sitio." ". $Asunto." ". $Mensaje;

?>