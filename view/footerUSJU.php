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
			function funcion_autorizar(id,sta,rol) {
				//console.log("Hey: tu codigo es: " + id + " estado: " + sta + " rol: " + rol);
				switch (sta) {
    				case 1:
    					if(rol != 'A'){
    						swal({
								title: "¿Desea autorizarlo?",
								//text: "¿Desea cerrar sesión?",
								icon: "warning",
								buttons: true,
								dangerMode: true,
							})
							.then((willDelete) => {
								if (willDelete) {
									swal(" ", {
									icon: "success",
									title: "Usuario autorizado!",
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
								}else{
									swal("Solicitud cancelada!", " ", "error");
									//recargamos la pagina para que se vea el cambio de estado
									setTimeout("location.href='../view/indexUSJU.php'", 1000);
								}
							});	
						}else{
							swal("Los administradores no pueden ser autorizados!", " ", "error");
						}
        				break;
    				case 2:
        				swal("El usuario se encuentra autorizado!", " ", "warning");
        				break;
    				case 3:
    					swal("El usuario se encuentra votando!", " ", "warning");
        				break;
    				case 4:
    					swal("El usuario ya realizó su votación!", " ", "error");
				}//fin swicth
			}//fin funcion

			function funcion_desautorizar(id,sta,rol) {
				//alert("Hey: " + id);
				switch (sta) {
    				case 1:
    					if(rol != 'A')
    						swal("El usuario se encuentra desautorizado!", " ", "warning");
        				else
        					swal("Los administradores no pueden ser desautorizados!", " ", "error");
        				break;
    				case 2:
    					if(rol != 'A'){
    						swal({
								title: "¿Desea desautorizarlo?",
								//text: "¿Desea cerrar sesión?",
								icon: "warning",
								buttons: true,
								dangerMode: true,
							})
							.then((willDelete) => {
								if (willDelete) {
									swal(" ", {
									icon: "success",
									title: "Usuario desautorizado!",
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
								}else{
									swal("Solicitud cancelada!", " ", "error");
									//recargamos la pagina para que se vea el cambio de estado
									setTimeout("location.href='../view/indexUSJU.php'", 1000);
								}
							});	
						}else{
							swal("Los administradores no pueden ser desautorizados!", " ", "error");
						}
        				break;
    				case 3:
    					swal("El usuario se encuentra votando!", " ", "warning");
        				break;
    				case 4:
    					swal("El usuario ya realizó su votación!", " ", "error");
    					break;
				}//fin swicth
			}//fin funcion
		</script>
    </body>
</html>