<?php
  //Se incluye la configuración de conexión a datos en el
  //SGBD: MariaDB.
  require_once '../model/database.php';
  session_start();
  if( $_SESSION["idrol"] == 'V' ){
    require_once '../view/error_usuarioCA.php';// este se muestra cuando quieren acceder a la vista 
  }else{
  //Para registrar productos es necesario iniciar los usuarios
  //de los mismos, por ello la variable controller para este
  //ejercicio se inicia con el 'usuario'.
  $controller = 'candidato';

  // Todo esta lógica hara el papel de un FrontController
  if(!isset($_REQUEST['c']))
  {
    //Llamado de la página principal
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->IndexC();
  }
  else
  {
    // Obtiene el controlador a cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'IndexC';

    // Instancia el controlador
    require_once "../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
  }
}//fin del else