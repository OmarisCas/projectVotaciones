<?php
	include "conexion.php";
	$mysqli = getConn();
	$cod = $_POST['codig'];//traje la variable del ajax declarada en la vista candidato.php

	$consulta = "SELECT * FROM candidato WHERE id_candidato = '$cod'";
	$resultado = mysqli_query($mysqli,$consulta);
	$filas =  mysqli_fetch_array($resultado);
	$candi = $filas["id_candidato"];

	$consulta2 = "SELECT * FROM voto WHERE id_candidato = '$cod'";
	$resultado2 = mysqli_query($mysqli,$consulta2);
	$filas2 =  mysqli_fetch_array($resultado2);
	$candi2 = $filas2["id_candidato"];

	if($filas["id_candidato" == $cod]){
		//require_once ("../assets/js/alertaDelete.js");
		echo "El usuario no puede ser eliminado porque se registra como candidato";
		$confirma ='1';
	}else if($filas2["id_candidato" == $cod]){
		echo "El usuario no puede ser eliminado porque se registra con votos a su favor";
		$confirma ='1';
	}else{
		$consulta = "DELETE FROM usuario WHERE codigo = '$cod'";
		$resultado = mysqli_query($mysqli,$consulta);
		$confirma = '0';
	}
?>