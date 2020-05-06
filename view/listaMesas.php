<?php
	require_once '../model/reloj.php';
	require_once '../model/consultMesa.php';
	require_once '../model/datosGraf.php';
	require_once '../model/datosGraf_2.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Reporte parcial</title>
    
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
   <!-- <link rel="stylesheet" href="../assets/css/jquery-ui/jquery-ui.min.css" /> -->
   <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/style.css" />
   <link rel="stylesheet" href="../assets/css/demo.css">
   <link rel="stylesheet" href="../assets/css/footer-distributed.css">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <link rel="icon" type="image/png" href="../assets/img/listaMesas.png"/>
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <!--en css font-family: 'Ubuntu', sans-serif;-->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="http://code.jquery.com/jquery-latest.js"></script>
   <script type="text/javascript" src="assets/js/Chart.js"></script>
   <script type="text/javascript" src="assets/js/Chart.min.js"></script>
   <script type="text/javascript" src="assets/js/Chart.bundle.js"></script>
   <script type="text/javascript" src="../assets/js/Chart.bundle.min.js"></script><!--GRAFICA-->
   <script type="text/javascript" src="../assets/js/graficaBar.js"></script>

    <style type="text/css">
      *{
        font-family: 'Ubuntu', sans-serif;
      }
    </style>


</head>
    <body>
    <div class="container contenido">
    	<br>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" style="font-size: 20px;">Jurado</a>
    			</div>
    			<ul class="nav navbar-nav">
      				<li style="font-size: 16px;"><a href="../view/indexUSJU.php">Usuarios</a></li><!--Elimine class active del <li>-->
      				<li><a href="../view/listaMesas.php">Reporte de votos</a></li>
      				<!--<li><a href="#">Page 3</a></li>-->
    			</ul>
  			</div>
		</nav>


<div class="panel" style="text-align: left; font-size: 16px;">
    <img src="../assets/img/jurado.png">
      
</div>

<div class="panel" style="text-align: left; font-size: 16px;">
    <?php
        echo $time2 . ', '; echo date("g:i a", strtotime($time1));  
    ?>
</div>

<h1 class="page-header"><span class="glyphicon glyphicon-zoom-in"></span> Reporte de escrutinio de mesas</h1>

<div class="row"><!--PARA PAGINACIÓN-->
	<div class="col-md-12"><!--PARA PAGINACIÓN-->
		<center><table id="example" class="table table-striped table-bordered table-hover " cellspacing="0" width="50%">
		<!---<table class="table table-hover">--><!-- TABLE ORIGINAL table-striped -->
    		<thead>
        		<tr>
            		<th style="width:80px;">Número de mesa</th>
            		<th style="width:80px;">Cantidad de votos</th>
        		</tr>
    		</thead>
    		<tbody>
				<!--INICIO DEL CICLO PARA LISTAR LA TABLA MESAS-->
				<?php
					while($mostrar=mysqli_fetch_object($resultado)){
						$mesas[$i] = $mostrar->id_mesa;
        		?>
        		<tr>
            		<td><?php echo $mesas[$i]; ?></td>
            		<?php
            			$consulta3 = "SELECT id_mesa, COUNT(*) as num FROM voto WHERE id_mesa = '$mesas[$i]' ORDER BY id_mesa";
						$resultado3 = mysqli_query($mysqli,$consulta3); 
            			while($mostrar3=mysqli_fetch_object($resultado3)){ ?>
            		<td><?php echo $mostrar3->num; ?></td>
            		<?php } ?>
        		</tr>
        		<?php $i++;} ?>
        		<!--FIN DEL CICLO PARA LISTAR LA TABLA MESAS-->
    		</tbody>
		</table></center>
	</div>
</div>
<br><br>
<h1 class="page-header"><span class="glyphicon glyphicon-hdd"></span> Mesas de votación</h1>
	<br>
<div id="canvas-container" style="width: 100%;">
	<canvas id="chart" width="100%" height="50%"></canvas>
	<script>
		$(document).ready(function(){
   		 
        var datos = {
            labels: [
            <?php
            	while($mostrar4=mysqli_fetch_object($resultado4)){ ?>
					'<?php echo $mostrar4->id_mesa; ?>',
					<?php
				}
            ?>
            ],
            datasets: [{
               label: "Cantidad de votos",
               backgroundColor: "rgba(172, 97, 160, 0.9)",
               data: [
               <?php
               		while($mostrar5=mysqli_fetch_object($resultado5)){ 
               			$mesas5[$s] = $mostrar5->id_mesa;
               			$consulta6 = "SELECT id_mesa, COUNT(*) as num FROM voto WHERE id_mesa = '$mesas5[$s]' ORDER BY id_mesa";
						$resultado6 = mysqli_query($mysqli,$consulta6); 
        				while($mostrar6=mysqli_fetch_object($resultado6)){				
               	?>
               	'<?php echo $mostrar6->num; ?>',

               <?php $s++; }} ?>
               ]
            },
            ]
         };

         var canvas = document.getElementById('chart').getContext('2d');
         window.bar = new Chart(canvas, {
            type: "bar",
            data: datos,
            options: {
               elements: {
                  rectangle: {
                     borderWidth: 1,
                     borderColor: "rgb(172, 97, 160, 0.9)",
                     borderSkipped: 'bottom'
                  }
               },
               responsive: true,
               title: {
                  display: true,
                  text: "Votos por mesa",
               }
            }
         });

   		function getRandom(){
   			return Math.round(Math.random() * 100);
   		}
	
	});

	</script>
</div>

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

<div class="row">
    <div class="col-xs-12">
        <hr />

    <footer class="footer-distributed">
		<div class="footer-left">
			<p class="footer-links">
				<a href="../view/listaMesas.php">Inicio</a>
			</p>
			<p>Elecciones Unimagdalena 2018</p>
	 	</div>
	</footer>
    </div>
</div>

</div> <!--se cierra div container-->
</body>
</html>