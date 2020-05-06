<!--Se muestra cuando el usuario ADMINISTRADOR no está logueado-->
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Listas</title>
		
		<!--I     N      H      A      B      I     L      I      T      A         FLECHA ATRAS----------------->
		<meta http-equiv="Expires" content="0" /> 
		<meta http-equiv="Pragma" content="no-cache" />
		<script type="text/javascript">
  		if(history.forward(1)){
    		location.replace( history.forward(1) );
  		}
		</script>
		<!--I     N      H      A      B      I     L      I      T      A         FLECHA ATRAS----------------->

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui/jquery-ui.min.css" />
		<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/demo.css">
    <link rel="stylesheet" href="../assets/css/footer-distributed.css">
		<link rel="stylesheet" href="../http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="../assets/img/ico_listas.png"/>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <!--en css font-family: 'Ubuntu', sans-serif;-->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js"></script>

    <style type="text/css">
      *{
        font-family: 'Ubuntu', sans-serif;
      }
    </style>

	</head>
    <body>

    <div class="container contenido"><!--Se cierra en footer.php-->
    <br>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" style="font-size: 20px;">Administrador</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li style="font-size: 16px;"><a href="../view/indexUS.php">Usuarios</a></li><!--Elimine class active del <li>-->
      				<li style="font-size: 16px;"><a href="../view/indexCA.php">Candidatos</a></li>
      				<!--<li><a href="#">Page 3</a></li>-->
    			</ul>
  			</div>
		</nav>
    <!--ALERTA          POR NO INICIO         DE      SESION-->
    <div class="panel panel-primary" style="text-align: center;">Vista no está disponible.<br>
      <script>
         swal("Vista no disponible!", "Por favor inicie sesión", "info");
      </script>
      <a href="../index.php">Click aqui para iniciar sesión</a>
    </div>