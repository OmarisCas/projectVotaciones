<?php
	include '../model/conexion.php';
	require_once '../model/reloj.php';
	$mysqli = getConn();
	$correo = $_POST["codigo"];
	$pass = $_POST["password"];

	$consulta = "SELECT * FROM usuario WHERE codigo = '$correo'";
	$resultado = mysqli_query($mysqli,$consulta);
	$filas =  mysqli_fetch_array($resultado);
	//variables que me almacenan campos de la tabla usuario
	$password = $filas["password"];
	$estadoActual = $filas["id_estado_usuario"];
	$rolActual = $filas["id_rol"];

	if($password == $pass && $rolActual === 'J' && $estadoActual != '2') {
		/*if( ($hora<$inicioAM && $zona=='am') || ($hora>$inicioPM && $zona=='pm') ){
			require_once("../view/error_sesion.php");
			echo '<script type="text/javascript">
					swal("Acceso no disponible!", "", "error");
              	</script>';
        	require_once("salir.php");
    	}else{*/
			session_start();
			$_SESSION["name"] = $filas["nombre1"];
			$_SESSION["name2"] = $filas["nombre2"];
			$_SESSION["ape1"] = $filas["apellido1"];
			$_SESSION["ape2"] = $filas["apellido2"];
			$_SESSION["pss"] = $filas["password"];
			$_SESSION["tipouser"] = $filas["id_tipo_usuario"];
			$_SESSION["idrol"] = $filas["id_rol"];
			$_SESSION["prog"] = $filas["id_programa"];
			$_SESSION["mesa"] = $filas["id_mesa"];
			$_SESSION["state"] = $filas["id_estado_usuario"];
			$_SESSION["id_usuario"] = $filas["codigo"];
			sleep(2);
			//header("location: ../view/indexUS.php");
			//header("location: ../view/usuario/formvotacion.php");
			header("location: ../view/indexUSJU.php");
		/*}*/
	}else
	if($password == $pass && $rolActual === 'J' && $estadoActual === '2'){
		/*if ( ($hora<$inicioAM_2 && $zona=='am') || ($hora>$inicioPM && $zona=='pm') ){
        	require_once("../view/error_sesion.php");
			echo '<script type="text/javascript">
				swal("Acceso no disponible!", "", "error");
              </script>';
        	require_once("salir.php");
		}else{*/
			$sql = "UPDATE usuario SET id_estado_usuario='3' WHERE codigo = '$correo'";
			mysqli_query($mysqli,$sql);
			session_start();
			$_SESSION["name"] = $filas["nombre1"];
			$_SESSION["name2"] = $filas["nombre2"];
			$_SESSION["ape1"] = $filas["apellido1"];
			$_SESSION["ape2"] = $filas["apellido2"];
			$_SESSION["pss"] = $filas["password"];
			$_SESSION["tipouser"] = $filas["id_tipo_usuario"];
			$_SESSION["idrol"] = $filas["id_rol"];
			$_SESSION["prog"] = $filas["id_programa"];
			$_SESSION["mesa"] = $filas["id_mesa"];
			$_SESSION["state"] = $filas["id_estado_usuario"];
			$_SESSION["id_usuario"] = $filas["codigo"];
			sleep(2);
			//header("location: ../view/indexUS.php");
			header("location: ../view/usuario/formvotacion.php");
			//header("location: ../view/indexUSJU.php");
		/*}*/
	}else
	if($password == $pass && $rolActual === 'A') {
			session_start();
			$_SESSION["name"] = $filas["nombre1"];
			$_SESSION["name2"] = $filas["nombre2"];
			$_SESSION["ape1"] = $filas["apellido1"];
			$_SESSION["ape2"] = $filas["apellido2"];
			$_SESSION["pss"] = $filas["password"];
			$_SESSION["tipouser"] = $filas["id_tipo_usuario"];
			$_SESSION["idrol"] = $filas["id_rol"];
			$_SESSION["prog"] = $filas["id_programa"];
			$_SESSION["mesa"] = $filas["id_mesa"];
			$_SESSION["state"] = $filas["id_estado_usuario"];
			$_SESSION["id_usuario"] = $filas["codigo"];
			sleep(2);
			header("location: ../view/indexUS.php");
			//header("location: ../view/usuario/formvotacion.php");
			//header("location: ../view/indexUSJU.php");

	}else
	if($password == $pass && $rolActual === 'V' && $estadoActual === '2') {
		/*if ( ($hora<$inicioAM_2 && $zona=='am') || ($hora>$inicioPM && $zona=='pm') ){
        	require_once("../view/error_sesion.php");
			echo '<script type="text/javascript">
				swal("Acceso no disponible!", "", "error");
              </script>';
        	require_once("salir.php");
		}else{*/
			$sql = "UPDATE usuario SET id_estado_usuario='3' WHERE codigo = '$correo'";
			mysqli_query($mysqli,$sql);
			session_start();
			$_SESSION["name"] = $filas["nombre1"];
			$_SESSION["name2"] = $filas["nombre2"];
			$_SESSION["ape1"] = $filas["apellido1"];
			$_SESSION["ape2"] = $filas["apellido2"];
			$_SESSION["pss"] = $filas["password"];
			$_SESSION["tipouser"] = $filas["id_tipo_usuario"];
			$_SESSION["idrol"] = $filas["id_rol"];
			$_SESSION["prog"] = $filas["id_programa"];
			$_SESSION["mesa"] = $filas["id_mesa"];
			$_SESSION["state"] = $filas["id_estado_usuario"];
			$_SESSION["id_usuario"] = $filas["codigo"];
			sleep(2);
			header("location: ../view/usuario/formvotacion.php");
			//header("location: ../view/indexUS.php");
			//header("location: ../view/indexUSJU.php");
		/*}*/
	}else
	if ($password == $pass && $rolActual === 'V' && $estadoActual === '1'){
		require_once("../view/error_sesion.php");
		echo '<script type="text/javascript">
		swal("Lo sentimos!", "El usuario no se encuentra autorizado", "error");
              </script>';
        require_once("salir.php");
	}else
	if($password == $pass && $rolActual === 'V' && $estadoActual === '3'){
		require_once("../view/error_sesion.php");
		echo '<script type="text/javascript">
		swal("Lo sentimos!", "El usuario se encuentra votando", "error");
              </script>';
        require_once("salir.php");
	}else
	if($password == $pass && $rolActual === 'V' && $estadoActual === '4'){
		require_once("../view/error_sesion.php");
		echo '<script type="text/javascript">
		swal("Lo sentimos!", "Usted ya concluyó el proceso votación", "error");
              </script>';
        require_once("salir.php");
	}else{
		require_once("../view/error_sesion.php");
		echo '<script type="text/javascript">
		swal("El usuario o la contraseña son incorrectos!", "Vuelva a intentarlo", "error");
              </script>';
        require_once("salir.php");
	}
?>