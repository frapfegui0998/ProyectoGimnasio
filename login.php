<?php
$conexion = oci_connect("Estudiante", "123", "localhost/orcl");

if(!$conexion) {
	$m = oci_error();
	echo $m['message'], "n";
	exit;
} else{
	echo "Conexión con éxito a Oracle!";
}
?>

