<?php 
  require_once '../../model/consejoAcademico.php';
  session_start();
  //echo $_SESSION['mesa'];
  if(!isset($_SESSION["name"])){
    require_once("headerVotanteNoSession.php");
  }else{
    require_once '../../model/reloj.php';
    require_once("headerConsejos.php");
    require_once("bodyCA.php");
  }
?>