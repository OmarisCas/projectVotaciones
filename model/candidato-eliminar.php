<?php
	include "conexion.php";
	$mysqli = getConn();
	$cod = $_POST['codig'];//traje la variable del ajax declarada en la vista candidato.php

	$consulta = "SELECT * FROM voto WHERE id_candidato = '$cod'";
	$resultado = mysqli_query($mysqli,$consulta);
	$filas =  mysqli_fetch_array($resultado);
	$candi = $filas["id_candidato"];

	if($filas["id_candidato" == $cod]){
		//require_once ("../assets/js/alertaDelete.js");
		echo "El candidato no puede ser eliminado porque registra votos a su favor";
		$confirma ='1';
	}else{
		$consulta = "DELETE FROM candidato WHERE id_candidato = '$cod'";
		$resultado = mysqli_query($mysqli,$consulta);
		$confirma = '0';
	}
?>