<?php

	$consulta9 = "SELECT candidato.id_candidato, candidato.foto, candidato.id_organo, candidato.numero, usuario.nombre1, usuario.nombre2, usuario.apellido1, usuario.apellido2 FROM usuario INNER JOIN candidato ON candidato.id_candidato = usuario.codigo WHERE candidato.id_organo = '2' ORDER BY usuario.nombre1";
  	$resultado9 = mysqli_query($mysqli,$consulta9); $j=0;

  	$consulta10 = "SELECT candidato.id_candidato, candidato.foto, candidato.id_organo, candidato.numero, usuario.nombre1, usuario.nombre2, usuario.apellido1, usuario.apellido2 FROM usuario INNER JOIN candidato ON candidato.id_candidato = usuario.codigo WHERE candidato.id_organo = '2' ORDER BY usuario.nombre1";
  	$resultado10 = mysqli_query($mysqli,$consulta10); $g=0;
  	/*
  	while($mostrar7=mysqli_fetch_object($resultado7)){
  		$candida[$g] = $mostrar7->id_candidato;
  		$consulta8 = "SELECT id_candidato, COUNT(*) as nume FROM voto WHERE id_candidato = '$candida[$g]' ORDER BY id_candidato";
  		$resultado8 = mysqli_query($mysqli,$consulta8); $a=0;
    	while($mostrar8=mysqli_fetch_object($resultado8)){
      		echo $mostrar8->nume;
  		}
  		$g++;
  	}
  	*/
	
?>