<?php
  require_once 'model/reloj.php';
  require_once 'model/datosGraf_3.php';
  require_once 'model/datosGraf_4.php';
  require_once 'model/datosGraf_5.php';
  require_once 'model/datosGraf_6.php';
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style_login.css">
	<link rel="icon" type="image/png" href="assets/img/ico_index.png"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <!--en css font-family: 'Ubuntu', sans-serif;-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="assets/js/Chart.js"></script>
   <script type="text/javascript" src="assets/js/Chart.min.js"></script>
   <script type="text/javascript" src="assets/js/Chart.bundle.js"></script>
   <script type="text/javascript" src="assets/js/Chart.bundle.min.js"></script><!--GRAFICA-->
   <script type="text/javascript" src="assets/js/jquery.min.js"></script>
   <script src="http://code.jquery.com/jquery-latest.js"></script>

   <script type="text/javascript">
    $(document).ready(function(){
    var datos = {
      type: "pie",
      data : {
        datasets :[{
          data : [
            <?php while($mostrar7=mysqli_fetch_object($resultado7)){
                      $candida[$g] = $mostrar7->id_candidato;
                      $consulta8 = "SELECT id_candidato, COUNT(*) as nume FROM voto WHERE id_candidato = '$candida[$g]' ORDER BY id_candidato";
                      $resultado8 = mysqli_query($mysqli,$consulta8); $a=0;
                      while($mostrar8=mysqli_fetch_object($resultado8)){
            ?>
            '<?php echo $mostrar8->nume; ?>',
          <?php } $g++; } ?>
          ],
          backgroundColor: [
            "#F7464A",
            "#46BFBD",
            "#FDB45C",
            "#949FB1",
            "#4D5360",
          ],
        }],
        labels : [
        <?php
          while($mostrar6=mysqli_fetch_object($resultado6)){ ?>
            '<?php echo $mostrar6->nombre1 . " " . $mostrar6->apellido1; ?>',
          <?php } ?>
        ]
      },
      options : {
        responsive : true,
      }
    };

    var canvas = document.getElementById('chart').getContext('2d');
    window.pie = new Chart(canvas, datos);

    //Grafica 2
    var datos2 = {
      type: "pie",
      data : {
        datasets :[{
          data : [
            <?php while($mostrar10=mysqli_fetch_object($resultado10)){
                      $candida[$g] = $mostrar10->id_candidato;
                      $consulta11 = "SELECT id_candidato, COUNT(*) as nume FROM voto WHERE id_candidato = '$candida[$g]' ORDER BY id_candidato";
                      $resultado11 = mysqli_query($mysqli,$consulta11); $a=0;
                      while($mostrar11=mysqli_fetch_object($resultado11)){
            ?>
            '<?php echo $mostrar11->nume; ?>',
          <?php } $g++; } ?>
          ],
          backgroundColor: [
            "#F7464A",
            "#46BFBD",
            "#FDB45C",
            "#949FB1",
            "#4D5360",
          ],
        }],
        labels : [
        <?php
          while($mostrar9=mysqli_fetch_object($resultado9)){ ?>
            '<?php echo $mostrar9->nombre1 . " " . $mostrar9->apellido1; ?>',
          <?php } ?>
        ]
      },
      options : {
        responsive : true,
      }
    };

    var canvas2 = document.getElementById('chart2').getContext('2d');
    window.pie = new Chart(canvas2, datos2);

    //Grafica 3
    var datos3 = {
      type: "pie",
      data : {
        datasets :[{
          data : [
            <?php while($mostrar13=mysqli_fetch_object($resultado13)){
                      $candida[$g] = $mostrar13->id_candidato;
                      $consulta14 = "SELECT id_candidato, COUNT(*) as nume FROM voto WHERE id_candidato = '$candida[$g]' ORDER BY id_candidato";
                      $resultado14 = mysqli_query($mysqli,$consulta14); $a=0;
                      while($mostrar14=mysqli_fetch_object($resultado14)){
            ?>
            '<?php echo $mostrar14->nume; ?>',
          <?php } $g++; } ?>
          ],
          backgroundColor: [
            "#F7464A",
            "#46BFBD",
            "#FDB45C",
            "#949FB1",
            "#4D5360",
          ],
        }],
        labels : [
        <?php
          while($mostrar12=mysqli_fetch_object($resultado12)){ ?>
            '<?php echo $mostrar12->nombre1 . " " . $mostrar12->apellido1; ?>',
          <?php } ?>
        ]
      },
      options : {
        responsive : true,
      }
    };

    var canvas3 = document.getElementById('chart3').getContext('2d');
    window.pie = new Chart(canvas3, datos3);

    //Grafica 4
    var datos4 = {
      type: "pie",
      data : {
        datasets :[{
          data : [
            <?php while($mostrar16=mysqli_fetch_object($resultado16)){
                      $candida[$g] = $mostrar16->id_candidato;
                      $consulta17 = "SELECT id_candidato, COUNT(*) as nume FROM voto WHERE id_candidato = '$candida[$g]' ORDER BY id_candidato";
                      $resultado17 = mysqli_query($mysqli,$consulta17); $a=0;
                      while($mostrar17=mysqli_fetch_object($resultado17)){
            ?>
            '<?php echo $mostrar17->nume; ?>',
          <?php } $g++; } ?>
          ],
          backgroundColor: [
            "#F7464A",
            "#46BFBD",
            "#FDB45C",
            "#949FB1",
            "#4D5360",
          ],
        }],
        labels : [
        <?php
          while($mostrar15=mysqli_fetch_object($resultado15)){ ?>
            '<?php echo $mostrar15->nombre1 . " " . $mostrar15->apellido1; ?>',
          <?php } ?>
        ]
      },
      options : {
        responsive : true,
      }
    };

    var canvas4 = document.getElementById('chart4').getContext('2d');
    window.pie = new Chart(canvas4, datos4);


  });
      </script>

  <style type="text/css">
    *{
      font-family: 'Ubuntu', sans-serif;
    }
  </style>

    <title>Elecciones</title>
  </head>
  <body class="" style="background-image: url('assets/img/fondo.jpeg');">
	<div class="container contenido" style="background-color: white;">
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->

    <div class="col-md-12" style="float: left;background-image: url('assets/img/.png');height: 730px;">
    <section id="login">
    <span><h1 style="font-size: 40px; ">Acceso a usuarios</h1></span>
    <div class="container text-center" style="">
      <div class="row" style="width: 100%;">
        <br><br><br>
        <div class="col-md-6 modal-content animate" style="width: 30%;margin-left: 382px;" >
          <div class="form-wrap" style="width: 300px;height: 500px;">
            <br><br>
            <img class="img_login" src="assets/img/section_login.jpg" style="height: 200px;width: 200px;" alt="">
              <!-- formulario -->
              <form role="form" action="model/acceder.php" method="post" >
                <div class="form-group">
                  <label for="codigo" class="sr-only">Código</label>
                  <input type="text" name="codigo"  class="form-control" placeholder="Código" required="">
                </div>
                
                <div class="form-group">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password"  class="form-control" placeholder="Password" required="">
                </div>
                
                <button type="submit" name="button" class="btn btn-success">Ingresar</button>
              </form><br><br><br><br><br><br><br><br><br><br><br>
              <!--<a href="views/registrar.php">Registrarte</a>-->
          </div> <!-- /.col-md-12 -->
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </section>
  </div>
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <center><div id="canvas-container" style="width: 50%;">
    <div class="panel panel-default" style="background-color: #E5E8E8">
      <h1 style="text-align: center;">Candidatos Consejo Superior</h1>
    </div>
    <br><canvas id="chart" width="500" height="300"></canvas><br>
  </div></center>
  
  <br><br><br><br><br>
  <center><div id="canvas-container" style="width: 50%;">
    <div class="panel panel-default" style="background-color: #E5E8E8">
      <h1 style="text-align: center;">Candidatos Consejo Academico</h1>
    </div>
    <canvas id="chart2" width="500" height="300"></canvas>
  </div></center>

  <br><br><br><br><br>
  <center><div id="canvas-container" style="width: 50%;">
    <div class="panel panel-default" style="background-color: #E5E8E8">
      <h1 style="text-align: center;">Candidatos Consejos de Facultad</h1>
    </div>
    <canvas id="chart3" width="500" height="300"></canvas>
  </div></center>

  <br><br><br><br><br>
  <center><div id="canvas-container" style="width: 50%;">
    <div class="panel panel-default" style="background-color: #E5E8E8">
      <h1 style="text-align: center;">Candidatos Consejos de Programa</h1>
    </div>
    <canvas id="chart4" width="500" height="300"></canvas>
  </div></center>

  <div class="row">
    <div class="col-xs-12">
      <hr />
      <footer class="footer-distributed">
        <div class="footer-left">
          <p class="footer-links">
          <a href="index.php">Inicio</a>
          </p>
          <p>Elecciones Unimagdalena 2018</p>
        </div>
      </footer>
    </div>
  </div>

  </div> <!-- /.container -->    
  
  <div class="row">
    <div class="col-xs-2">
      <hr />
      <footer class="footer-distributed"></footer>
    </div>
  </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/funcionlogin.js"></script>
    
	</div> 

  </body>
</html>
