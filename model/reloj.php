<?php
    ini_set('date.timezone', 'America/Mexico_City');
    $time1 = date('H:i:s', time()); //hora
    if(date("N") == 7)
    	$dia = "Domingo";
    if(date("N") == 6)
    	$dia = "Sábado";
    if(date("N") == 5)
    	$dia = "Viernes";
    if(date("N") == 4)
    	$dia = "Jueves";
    if(date("N") == 3)
    	$dia = "Miércoles";
    if(date("N") == 2)
    	$dia = "Martes";
    if(date("N") == 1)
    	$dia = "Lunes";

    $time2 = $dia . date(' d M Y', time());
    
    $zona = date("a");
    $hora = date("g");
    $seg = date("i");
    $inicioAM = '7';
    $inicioAM_2 = '8';
    $finAM = '12';
    $finAM_2 = '12'; //acceder jurado
    $inicioPM = '4';
    $finPM = '11';
    $inicioSeg = '0';
    $finSeg = '59';
    //$time2 = $dia . date('D d M Y, H:i', time());
    //echo date("g:i a", strtotime($time1));
    //echo '<br>';
    //echo $time2.'<br>';
?>