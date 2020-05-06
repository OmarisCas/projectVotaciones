<?php
	include "../conexion.php";
	$mysqli = getConn();
	$cod = $_POST['codig'];

	$consulta = "SELECT * FROM usuario WHERE codigo = '$cod'";
	$resultado = mysqli_query($mysqli,$consulta);
	$filas =  mysqli_fetch_array($resultado);
	$estadoA = $filas["id_estado_usuario"];
	$rolA = $filas["id_rol"];

	switch ($estadoA) {
    case 1:
    	if($rolA != 'A')
        	echo "El usuario se encuentra desautorizado!";
        else
        	echo "Los administradores no pueden ser desautorizados!";
        break;
    case 2:
    	if($rolA != 'A'){
        	$sql = "UPDATE usuario SET id_estado_usuario='1' WHERE codigo = '$cod'";
			mysqli_query($mysqli,$sql);
		}else{
			echo "Los administradores no pueden ser desautorizados";
		}
        break;
    case 3:
        echo "El usuario se encuentra votando";
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