<!--Esta conexion la utilizo solo para el login para validar usuario y contraseña-->
<?php
	function getConn(){
		$mysqli = mysqli_connect('localhost', 'root', '', "votaciones");
  			if(mysqli_connect_errno($mysqli))
    			echo "Falló al conectar a MySQL: " . mysqli_connect_error();
  				$mysqli->set_charset('utf8');
  				return $mysqli;
	}
?>