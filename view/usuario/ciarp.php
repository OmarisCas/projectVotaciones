<?php 
  require_once '../../model/votorealizado.php';
  //session_start();
  //echo $_SESSION['mesa'];
  if(!isset($_SESSION["name"])){
    require_once("headerVotanteNoSession.php");
  }else{
    require_once("headerCI.php");
    require_once("bodyCI.php");
  }
?>