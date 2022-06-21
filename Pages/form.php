<?php
$nombre = $_POST["name"];
$apellido = $_POST["apelldio"];
$edad = $_POST["edad"];
$tel = $_POST["tel"];
$mail = $_POST["email"];
$dia = $_POST["dia"];
$hora = $_POST["hora"];

$mensaje .= "El nombre del cliente es" . $nombre . ",\r\n";
$mensaje .= "Su apellido es" . $apellido . ",\r\n";
$mensaje .= "El telefono del cliente es" . $tel . ",\r\n";
$mensaje .= "El mail del cliente es" . $mail . ",\r\n";
$mensaje .= "Dia en el que el cliente asiste" . $dia . ",\r\n";
$mensaje .= "Hora a la cuál el cliente asiste" . $hora . ",\r\n";

$para = "franciscojsegui@gmail.com";
$asunto = "Turno para consultoría";
header = ("Location index.html");

mail($para, $asunto, utf8_decode ($mensaje), $header);
?>