<?php
$usr = 'admin';
$pass = '12125050.DnD';
$server = '127.0.0.1';
$bd = 'proyectoSoto';

$conn = new mysqli($server, $usr, $pass, $bd);

if ($conn->connect_errno) {
	// echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	echo "<!-- Fallo al conectar a MySQL -->";
}
else{
	$conn->set_charset("utf8");
	echo "<!-- Conexion exitosa -->";
}

echo "bd";
?>