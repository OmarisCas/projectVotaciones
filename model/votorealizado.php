<?php 
	include '../../model/conexion.php';
  	$mysqli = getConn();
  	session_start();
  	$codigoUSvoto = $_SESSION['id_usuario']; // le asigno a la variable $codigoUSvoto el codigo de usuario que efectivamente ya ha completado su voto!.
  	$mesaUSvoto = $_SESSION['mesa'];

  	$sql = "UPDATE usuario SET id_estado_usuario='4' WHERE codigo = '$codigoUSvoto'";
    mysqli_query($mysqli,$sql);

    //$insertarVOTO = "INSERT INTO voto (id_mesa,id_candidato) VALUES ($mesaUSvoto,)";

	//$consulta = "SELECT id_candidato FROM candidato WHERE id_organo = '$organo'";
	//$resultado = mysqli_query($mysqli,$consulta);
	
	//$j=0;
	//while($mostrar=mysqli_fetch_object($resultado)){
	//	$miarray[$j] = $mostrar->id_candidato;
	//	$j++;
	//}
	//echo $miarray[0];
	//echo "<br>";
	//echo $miarray[1];
	//var_dump($miarray);
 ?>