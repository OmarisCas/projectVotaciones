<?php
	include "conexion.php";
	$mysqli = getConn();

	$consulta = "SELECT id_mesa FROM mesa ORDER BY id_mesa";
	$resultado = mysqli_query($mysqli,$consulta); $i=0; $j=0;

    //echo count($comida) CONTAR UN ARRAY
?>