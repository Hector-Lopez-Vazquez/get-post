<?php

//$nombre = $_POST["nombre"];
//$email = $_POST["email"];
//$telefono = $_POST["telefono"];
//$sitio = $_POST["sitio"];
//$asunto = $_POST["asunto"];
//$mensaje = $_POST["mensaje"];

$nombre = $_GET["nombre"];
$email = $_GET["email"];
$telefono = $_GET["telefono"];
$sitio = $_GET["sitio"];
$asunto = $_GET["asunto"];
$mensaje = $_GET["mensaje"];


echo $nombre." ". $email." ". $telefono."".$sitio." ". $asunto." ". $mensaje;

?>