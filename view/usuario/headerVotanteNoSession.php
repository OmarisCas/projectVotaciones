<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!-----------------------------------------NO HA INICIADO SESION----------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
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
<body>
  <!-- INICIO DIV container mt-4 -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-sm-2">
        <img class="logo" src="../../assets/img/logo_izq.jpg"/>
      </div>
      <div class="col-sm-8 mt-4">
        <h2 class="text-center ml-4">
          <b>
            VOTO PARA ESTAMENTOS UNIVERSITARIOS
          </b>
        </h2>
      </div>
      <div class="col-sm-2">
        <img class="logo" src="../../assets/img/logo_der2.jpg" style="width: 80px;height: 50px;" />
      </div>
    </div>
    
    <br>
    <!--ALERTA          POR NO INICIO         DE      SESION-->
    <div class="panel panel-primary" style="text-align: center;">Vista no está disponible.<br>
      <script>
         swal("Vista no disponible!", "Por favor inicie sesión", "info");
      </script>
      <a href="../../index.php">Click aqui para iniciar sesión</a>
    </div>