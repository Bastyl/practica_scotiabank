<?php

$rut = 100000000+10;

$mysqli = new mysqli('localhost', 'root', 'root', 'testpractica');

$sql = "DELETE FROM altausuario WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "DELETE FROM attlasian WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "DELETE FROM usuario WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "UPDATE contadormail SET contadortop = 10 WHERE contadortop = 13";
$mysqli->query($sql);

$sql = "DELETE FROM sid WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "DELETE FROM solicitud WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "DELETE FROM tiba WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "DELETE FROM vpn WHERE Rut = '$rut'";
$mysqli->query($sql);

$sql = "UPDATE altausuario SET sp1='A' WHERE Rut = 110001112";
$mysqli->query($sql);

$sql = "UPDATE solicitud SET Altausuario ='A' WHERE Rut = 110001112";
$mysqli->query($sql);

$mysqli->close();


?>
