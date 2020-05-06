<?php 
	include "../conexion.php";
	$mysqli = getConn();
	$cod = $_POST['codig'];//traje la variable del ajax declarada en el usuarioUSJU.php

	$consulta = "SELECT * FROM usuario WHERE codigo = '$cod'";
	$resultado = mysqli_query($mysqli,$consulta);
	$filas =  mysqli_fetch_array($resultado);
	$estadoA = $filas["id_estado_usuario"];
	$rolA = $filas["id_rol"];

	switch ($estadoA) {
    case 1:
    	if($rolA != 'A'){
        	$sql = "UPDATE usuario SET id_estado_usuario='2' WHERE codigo = '$cod'";
			mysqli_query($mysqli,$sql);
			//tocar regargar la pagina
			header("location: view/indexUSJU.php");
		}else{
			echo "Los administradores no pueden ser autorizados";
		}
        break;
    case 2:
        echo "El usuario se encuentra autorizado";
        break;
    case 3:echo "El usuario se encuentra votando";
        break;
    case 4:
    	echo "El usuario ya realizó su votación";
    	break;
	}
	//$filas =  mysqli_fetch_array($result);
	//$password = $filas["codigo"];

	//echo "Llego al servidor: ";
	//$filas["id_estado_usuario"] = '2';
 ?>