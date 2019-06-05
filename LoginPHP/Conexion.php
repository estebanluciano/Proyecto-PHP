<?php
	$servername = "localhost";
	$username = "estebanluciano";
	$password = "hardcore";

	// Crea la conexion
	$conn = mysqli_connect($servername, $username, $password);

	// Prueba la conexion
	if (!$conn) {
	    die("Fallo la conexion: " . mysqli_connect_error());
	}
	echo "Conectado satisfactoriamente!";
?>