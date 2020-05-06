<?php
  //require_once '../../model/acceder.php';
  include '../../model/conexion.php';
  $mysqli = getConn();
  session_start();
  if(!isset($_SESSION["name"])){
    require_once("headerVotanteNoSession.php");

  }else{
    if($_SESSION["state"] == '2' || $_SESSION["state"] == '3'){
      //Estado 3 es para cuando el usuario se este paseando por los tarjetones
      require_once("headerVotanteSession.php");
      require_once("bodyVotanteSession.php");
    }
  }
?>