<?php require_once '../../model/reloj.php'; ?>
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!-----------------------------------------HA INICIADO SESION-------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<br>
<!doctype html>
<html lang="es">
<head>
  <!--I     N      H      A      B      I     L      I      T      A         FLECHA ATRAS----------------->
    <meta http-equiv="Expires" content="0" /> 
    <meta http-equiv="Pragma" content="no-cache" />
    <script type="text/javascript">
        if(history.forward(1)){
          location.replace( history.forward(1) );
        }
    </script>
    <!--I     N      H      A      B      I     L      I      T      A         FLECHA ATRAS----------------->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <!--en css font-family: 'Ubuntu', sans-serif;-->
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../../assets/img/tarjeton.png"/>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/style_votar.css">

  <style type="text/css">
    *{
      font-family: 'Ubuntu', sans-serif;
    }
  </style>

  <script type="text/javascript">
    function cerrarSesion(){
      swal({
      //title: "¿Desea cerrar sesión?",
      text: "¿Desea cerrar sesión?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
      if (willDelete) {
        swal("En segundos saldrá del sistema! ", {
        icon: "success",
      });
      setTimeout("location.href='../../model/desconectar.php'", 1500);
      }else{
        //swal("Vuelva a seleccionar!");
        //mandar a recargar la pagina
        setTimeout("location.href='formvotacion.php'", 50);
      }
      });
      //window.close();
    }
  </script>
  <!--PARA          SWEET         ALERT           SENCILLOS   -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!--PARA          SWEET         ALERT           CON       BOOTSTRAP   -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://lipis.github.io/bootstrap-sweetalert/lib/sweet-alert.js"></script>
    <link rel="stylesheet" href="http://lipis.github.io/bootstrap-sweetalert/lib/sweet-alert.css">
  <!---FIN></!---FIN></!---FIN></!---FIN></!---FIN>-->

  <title>Inicio Votante</title>
</head>