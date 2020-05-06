<?php
    session_start();
    //echo "codig del usuario logueado: " . $_SESSION["mesa"];
?>
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
      				<a class="navbar-brand" style="font-size: 20px;">Jurado</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li style="font-size: 16px;"><a href="../view/indexUSJU.php">Usuarios</a></li><!--Elimine class active del <li>-->
      				<!--<li><a href="../view/indexCA.php">Candidatos</a></li>-->
      				<!--<li><a href="#">Page 3</a></li>-->
    			</ul>
  			</div>
		</nav>
    <div class="panel" style="text-align: left; font-size: 16px;">
      <?php
        echo $_SESSION["name"] . "  " . $_SESSION["name2"] . "  " . $_SESSION["ape1"] . "  " . $_SESSION["ape2"] . " - " . $_SESSION["id_usuario"];
      ?>
      <!--OPCIÓN a implementar despues
      <button onclick="" style="object-position: left;position: relative;left:665px;margin-top: 7px;" class="btn btn-secundary" id="cerrar">
        Cerrar Sesión
      </button>
      -->
      <button class="btn btn-default" onClick="cerrarSJU();" style="margin-top: 5px;font-size: 16px;position:relative;left:720px;">Cerrar Sesión
      </button>
</div>

<h1 class="page-header">Lista de Usuarios</h1>

<div class="row"><!--PARA PAGINACIÓN-->
  <div class="col-md-12"><!--PARA PAGINACIÓN-->
    <table id="example" class="table table-striped table-bordered table-hover " cellspacing="0" width="100%">
    <!---<table class="table table-hover">--><!-- TABLE ORIGINAL table-striped -->
        <thead>
            <tr>
                <th style="width:180px;">Código</th>
                <th style="width:120px;">1er Nombre</th>
                <th style="width:120px;">2do Nombre</th>
                <th style="width:120px;">1er Apellido</th>
          <th style="width:120px;">2do Apellido</th>
          <th style="width:120px;">Password</th>
          <th style="width:120px;">Tipo usuario</th>
          <th style="width:120px;">Rol</th>
          <th style="width:120px;">Programa</th>
          <th style="width:120px;">Mesa</th>
          <th style="width:120px;">Estado</th>
          <th></th>
          <th></th>
            </tr>
        </thead>
        <tbody>
        <!--INICIO DEL CICLO PARA LISTAR LA TABLA USUARIO-->
          <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->codigo; ?></td>
                <td><?php echo $r->nombre1; ?></td>
                <td><?php echo $r->nombre2; ?></td>
                <td><?php echo $r->apellido1; ?></td>
          <td><?php echo $r->apellido2; ?></td>
          <td><?php echo $r->password; ?></td>
          <td><?php echo $r->id_tipo_usuario; ?></td>
          <td><?php echo $r->id_rol; ?></td>
          <td><?php echo $r->id_programa; ?></td>
          <td><?php echo $r->id_mesa; ?></td>
          <td><?php echo $r->id_estado_usuario; ?></td>
                
                    <td>
                    <a class="btn btn-success" onclick="funcion_autorizar(<?php echo $r->codigo; ?>)">
                            <em class="fa fa-pencil"></em>
                            Autorizar
                        </a>
                </td>
                
                    <td>
                    <a class="btn btn-danger" onclick="funcion_desautorizar(<?php echo $r->codigo; ?>)">
                            <em class="fa fa-pencil"></em>
                            Desautorizar
                        </a>
                </td>
            </tr>
        <!--FIN DEL CICLO PARA LISTAR LA TABLA USUARIO-->
          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>
            <div class="row">
                <div class="col-xs-12">
                    <hr />

                    <footer class="footer-distributed">
                      <div class="footer-left">
                        <p class="footer-links">
                          <a href="../view/indexUSJU.php">Inicio</a>
                        </p>
                        <p>Elecciones Unimagdalena 2018</p>
                      </div>
                </footer>
                </div>
            </div>
        </div><!--Cierra div class container que se abre en header.php-->

    <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery-1.11.2.min.js"></script>
    <!-- SCRIPTS DE PAGINACION-->
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <!-- SCRIPTS DE PAGINACION-->
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="../assets/js/ini.js"></script>
        <script src="../assets/js/jquery.anexsoft-validator.js"></script>
    <!--<script src="../assets/js/alertas.js"></script> NO LA ESTOY USANDO PERO SI ESTA EN LOS ARCHIVOS-->
    <script src="../assets/js/cerrarSJU.js"></script>
    
    <script type="text/javascript">
      function funcion_autorizar(id) {
        //alert("Hey: " + id);
        swal({
          title: "¿Desea autorizarlo?",
          //text: "¿Desea autorizarlo?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
          swal("Usuario autorizado! ", {
          icon: "success",
        });
        //llamamos a ajax
        $.ajax({
            method: 'POST',
            url: '../model/UsuarioJU_autorizar/autorizar.php',
            data: {'codig':id},
            success: function(data) {
            console.log(" Mensaje: " + data)
            },
            error: function(data) {
            console.log("Error: " + data)
            }
        });
        //recargamos la pagina para que se vea el cambio de estado
        setTimeout("location.href='../view/indexUSJU.php'", 1000);

        //setTimeout("location.href='../model/desconectar.php'", 1500);
        }else{
          swal("Solicitud cancelada", " ", "error");
          //mandar a recargar la pagina
          setTimeout("location.href='../view/indexUSJU.php'", 1500);
          //setTimeout("location.href='../view/indexUS.php'", 1500);
        }
        });
      }

      function funcion_desautorizar(id) {
        //alert("Hey: " + id);
        swal({
          title: "¿Desea desautorizarlo?",
          //text: "¿Desea autorizarlo?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
          swal("Usuario no autorizado! ", {
          icon: "success",
        });
        //llamamos a ajax
        $.ajax({
          method: 'POST',
          url: '../model/UsuarioJU_autorizar/desautorizar.php',
          data: {'codig':id},
          success: function(data) {
            console.log(" Mensaje: " + data)
          },
          error: function(data) {
            console.log("Error: " + data)
          }
        });
        //recargamos la pagina para que se vea el cambio de estado
        setTimeout("location.href='../view/indexUSJU.php'", 1000);

        //setTimeout("location.href='../model/desconectar.php'", 1500);
        }else{
          swal("Solicitud cancelada", " ", "error");
          //mandar a recargar la pagina
          setTimeout("location.href='../view/indexUSJU.php'", 1500);
          //setTimeout("location.href='../view/indexUS.php'", 1500);
        }
        });
      }
    </script>
    </body>
</html>