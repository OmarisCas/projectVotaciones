<?php
    //echo "codig del usuario logueado: " . $_SESSION["mesa"];
  if(!isset($_SESSION["name"])){
    session_start();
    require_once "../error_usuarioUS.php";
    //header("location: ../../view/usuario/error_usuarioUSJU.php");
  }else{//esta opcion si se necesita para cuando el jurado ya tenga una sesion activa
    require_once '../model/reloj.php';
?>

<div class="panel" style="text-align: left; font-size: 16px;">
        <img src="../assets/img/admin.png">
      <?php
        echo $_SESSION["name"] . "  " . $_SESSION["name2"] . "  " . $_SESSION["ape1"] . "  " . $_SESSION["ape2"] . " - " . $_SESSION["id_usuario"];
      ?>
      <!--OPCIÓN a implementar despues
      <button onclick="" style="object-position: left;position: relative;left:665px;margin-top: 7px;" class="btn btn-secundary" id="cerrar">
        Cerrar Sesión
      </button>
      -->
</div>

<div class="panel" style="text-align: left; font-size: 16px;">
    <?php
        echo $time2 . ', '; echo date("g:i a", strtotime($time1));  
    ?>
    <div style="float: right;margin-top: -15px;">
        <button class="btn btn-default" onClick="cerrarSUS();" style="font-size: 16px;"><i class="fa fa-power-off" aria-hidden="true"></i>   Cerrar Sesión
        </button>
    </div>
</div>

<h1 class="page-header"><span class="glyphicon glyphicon-user"></span>          Lista de Usuarios</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=usuario&a=Nuevo">Nuevo Usuario</a>
    <!--<a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>-->
</div>

<div class="row"><!--PARA PAGINACIÓN-->
	<div class="col-md-12"><!--PARA PAGINACIÓN-->
		<table id="example" class="table table-striped table-bordered table-hover " cellspacing="0" width="100%">
		<!---<table class="table table-hover"> --> <!-- TABLE ORIGINAL table-striped -->
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
					     <th><em class="fa fa-pencil"></em></th>
					     <th><em class="fa fa-trash"></em></th>
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
                		<a class="btn btn-success" href="?c=usuario&a=Crud&codigo=<?php echo $r->codigo; ?>"><em class="fa fa-pencil"></em></a>
            		</td>
            		<td>
                		<button class="btn btn-danger" onClick="Eliminar(<?php echo $r->codigo; ?>);" href=""><em class="fa fa-trash"></em></button>
            		</td>
        		</tr>
				<!--FIN DEL CICLO PARA LISTAR LA TABLA USUARIO-->
    			<?php endforeach; ?>
    		</tbody>
		</table>
    <script type="text/javascript">
            function Eliminar(id){
                swal({
                    title: "¿Desea eliminar este usuario?",
                    //text: "¿Desea eliminar este candidato?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal(" ", {
                        icon: "success",
                        title: "Eliminado!",
                    });
                    $.ajax({
                        method: 'POST',
                        url: '../model/usuario-eliminar.php',
                        data: {'codig':id},
                        success: function(data) {
                            console.log(" Mensaje: " + data)
                        },
                        error: function(data) {
                            console.log("Error: " + data)
                        }
                    });
                    //mandar a recargar la pagina
                    setTimeout("location.href='../view/indexUS.php'", 1500);
                }else{
                    swal("Cancelado!", " ", "error");
                    //mandar a recargar la pagina
                    //setTimeout("location.href='../view/indexUS.php'", 1500);
                }
                });
            }       
        </script>
	</div>
</div>
<?php } ?>