
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_login.css">
	<link rel="icon" type="image/png" href="../assets/img/ico_index.png"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> <!--en css font-family: 'Ubuntu', sans-serif;-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="assets/js/Chart.js"></script>
   <script type="text/javascript" src="assets/js/Chart.min.js"></script>
   <script type="text/javascript" src="assets/js/Chart.bundle.js"></script>
   <script type="text/javascript" src="assets/js/Chart.bundle.min.js"></script><!--GRAFICA-->
   <script type="text/javascript" src="assets/js/jquery.min.js"></script>
   <script src="http://code.jquery.com/jquery-latest.js"></script>

  <style type="text/css">
    *{
      font-family: 'Ubuntu', sans-serif;
    }
  </style>
    <title>Elecciones</title>
  </head>
  <body class="" style="background-image: url('../assets/img/fondo.jpeg');">
  <div class="container contenido" style="background-color: white;">
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->
    <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO--> <!--CONTENIDO-->

    <div class="col-md-12" style="float: left;background-image: url('../assets/img/.png');height: 730px;">
    <section id="login">
    <span><h1 style="font-size: 40px; ">Acceso a usuarios</h1></span>
    <div class="container text-center" style="">
      <div class="row" style="width: 100%;">
        <br><br><br>
        <div class="col-md-6 modal-content animate" style="width: 30%;margin-left: 382px;" >
          <div class="form-wrap" style="width: 300px;height: 500px;">
            <br><br>
            <img class="img_login" src="../assets/img/section_login.jpg" style="height: 200px;width: 200px;" alt="">
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
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/funcionlogin.js"></script>
  
  </div> 

  </body>
</html>



