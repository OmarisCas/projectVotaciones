<?php 
	include "conexion.php";
	$mysqli = getConn();
/*
	$organo = '3';
	$consulta = "SELECT id_candidato, foto FROM candidato WHERE id_organo = '$organo'";
	$resultado = mysqli_query($mysqli,$consulta); $j=0;
  		while($mostrar=mysqli_fetch_object($resultado)){
    		$idcandidato[$j] = $mostrar->id_candidato;
    		$foto[$j] = $mostrar->foto;
    		$j++;
  		}
  		*/
  	$consulta = "SELECT candidato.id_candidato, candidato.foto, candidato.id_organo, candidato.numero, usuario.nombre1, usuario.nombre2, usuario.apellido1, usuario.apellido2 FROM usuario INNER JOIN candidato ON candidato.id_candidato = usuario.codigo WHERE candidato.id_organo = '3' ORDER BY usuario.nombre1";
  	$resultado = mysqli_query($mysqli,$consulta); $j=0;
  		while($mostrar=mysqli_fetch_object($resultado)){
    		$idcandidato[$j] = $mostrar->id_candidato;
    		$foto[$j] = $mostrar->foto;
    		$nom1[$j] = $mostrar->nombre1;
    		$nom2[$j] = $mostrar->nombre2;
    		$ape1[$j] = $mostrar->apellido1;
    		$ape2[$j] = $mostrar->apellido2;
    		$num[$j] = $mostrar->numero;
    		$j++;
  		}

    $consulta2 = "SELECT nombre FROM organo WHERE id_organo = '3'";
    $resultado2 = mysqli_query($mysqli,$consulta2); $a=0;
    while($mostrar2=mysqli_fetch_object($resultado2)){
      $nombreOrgano = $mostrar2->nombre;
    }
	//echo "<br>Numero de candidatos: " . $j;
	//echo $miarray[0];
	//echo "<br>";
	//echo $miarray[1];
	//var_dump($miarray);	
 ?>