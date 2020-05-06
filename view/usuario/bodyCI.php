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
              <a style="font-size: 20px;" class="navbar-brand" href="">Votante</a>
          </div>
          <ul class="nav navbar-nav">
              <li style="font-size: 16px;"><a href="">Consejo Superior<!--contenido--></a></li>
              <li style="font-size: 16px;"><a href="">Consejo Académico<!--contenido--></a></li>
              <li style="font-size: 16px;"><a href="">Consejos de Facultad<!--contenido--></a></li>
              <li style="font-size: 16px;"><a href="">Consejos de Programa<!--contenido--></a></li>
              <li style="font-size: 16px;" class="active"><a href="">CIARP<!--contenido--></a></li>
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
    </div>

    <div class="panel panel-warning" style="height: 610px;">
    <div class="panel-heading" style="height: 130px;">
      <script>
        swal({
          title: "Votación exitosa!",
          text: "Usted está saliendo del sistema",
          icon: "success",
          button: "Aceptar",
        });
        setTimeout("location.href='../../model/desconectar.php'", 4000);

      </script>
      <br><center><h1>¡Su voto ha sido registrado exitosamente!</h1></center>
        <br><br><br><center><img src="../../assets/img/candidatos/certificadoV.jpg" alt=""><center></div><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--FORMULARIO CERTIFICADO
          <div class="col-sm-6 hanover" style="background-color: blue;width: 60%;font-style: black;">dnfksdnf</div>
        -->
  </div>  
  </div>
  <!-- FIN DIV container mt-4-- ><br/>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/funcionvoto.js"></script>

  </body>
</html>