<?php
	include "conexion.php";
	$mysqli = getConn();
	$can = $_POST['candidatoSelect'];
	$me = $_POST['table'];

	$insertar = "INSERT INTO voto (id_mesa, id_candidato) VALUES ('$me','$can')";
	$ejecutar = mysqli_query($mysqli,$insertar);

	//echo $_SESSION['mesa'];
?>