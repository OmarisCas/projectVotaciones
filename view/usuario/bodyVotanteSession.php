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
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
              <a style="font-size: 20px;" class="navbar-brand" href="formvotacion.php">Votante</a>
          </div>
          <ul class="nav navbar-nav">
              <li style="font-size: 16px;"><a href="">Consejo Superior</a></li>
              <li style="font-size: 16px;"><a href="">Consejo Académico</a></li>
              <li style="font-size: 16px;"><a href="">Consejos de Facultad</a></li>
              <li style="font-size: 16px;"><a href="">Consejos de Programa</a></li>
              <li style="font-size: 16px;"><a href="">CIARP<!--contenido--></a></li>
          </ul>
        </div>
    </nav>

    <div class="panel" style="text-align: left; font-size: 16px;">
      <?php
        echo $_SESSION["name"] . "  " . $_SESSION["name2"] . "  " . $_SESSION["ape1"] . "  " . $_SESSION["ape2"] . " - " . $_SESSION["id_usuario"];
      ?>
      <!-- OPCIÓN de implementarlo pero a futuro 
      <button onclick="cerrarSesion();" style="object-position: left;position: relative;left:665px;margin-top: 7px;" class="btn btn-secundary" id="cerrar">
        Cerrar Sesión
      </button>
      -->
      
    </div>

    <div class="panel" style="text-align: left; font-size: 16px;">
    <?php
        echo $time2 . ', '; echo date("g:i a", strtotime($time1));  
    ?>
    </div>

    <div class="panel panel-primary " style="font-family: 'Ubuntu', sans-serif;font-size: 18px;height: 490px;">
    <div class="panel-heading" style="height: 130px;">
      <br><center><h1 style="font-family: 'Ubuntu', sans-serif;font-size: 45px;">Bienvenido <?php echo $_SESSION["name"]; ?> </h1></center><br><br><br>
    </div>

    <br><br>

    <div class="alert alert-info">
      <strong>Recuerda!</strong> Este proceso solo puede ser realizado una vez.
    </div>

    <div class="alert alert-info">
      <strong>No olvides!</strong> Marcar todos los tarjetones.
    </div>

    <div class="alert alert-info">
      <strong>Por último, </strong> Haz tu proceso de votación a conciencia
    </div>
    
    <center><button class="btn btn-primary center" style="font-family: 'Ubuntu', sans-serif;font-size: 22px;" onclick="window.location.href='consejoSuperior.php'">Siguiente</button></center>
    
    <ul>
    </ul>
    
  </div>
  
  </div>
  <!-- FIN DIV container mt-4-- ><br/>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/alertas.js"></script>
    <script src="../../assets/js/funcionvoto.js"></script>
  </body>
</html>