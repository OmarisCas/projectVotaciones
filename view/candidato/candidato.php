<?php
    //echo "codig del usuario logueado: " . $_SESSION["mesa"];
    if(!isset($_SESSION["name"])){
    session_start();
    require_once 'view/usuario/error_usuarioCA.php';
    //header("location: ../../view/usuario/error_usuarioUSJU.php");
    }else{//esta opcion si se necesita para cuando el administrador ya tenga una sesion activa
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
        <button class="btn btn-default" onClick="cerrarSCA();" style="font-size: 16px;"><i class="fa fa-power-off" aria-hidden="true"></i>   Cerrar Sesión
        </button>
    </div>
</div>

<h1 class="page-header"><span class="glyphicon glyphicon-user"></span>          Lista de Candidatos</h1>

<div class="well well-sm text-right">
    <!--<a class="btn btn-primary" href="?c=usuario&a=Nuevo">Nuevo Usuario</a>-->
    <a class="btn btn-primary" href="?c=candidato&a=Nuevo">Nuevo Candidato</a>
</div>

<div class="row"><!--PARA PAGINACIÓN-->
	<div class="col-md-12"><!--PARA PAGINACIÓN-->
		<table id="example" class="table table-striped table-bordered table-hover " cellspacing="0" width="100%">
		<!--<table class="table table-hover" width="100%"> -->
		<!-- TABLE ORIGINAL table-striped -->
    		<thead>
        		<tr>
            		<th style="width:180px;">ID Candidato</th>
            		<th style="width:180px;">Número</th>
            		<th style="width:180px;">Órgano</th>
            		<th style="width:180px;">Foto</th>
                    <th><em class="fa fa-pencil"></em></th>
                    <th><em class="fa fa-trash"></em></th>
        		</tr>
    		</thead>
    		<tbody>
				<!--INICIO DEL CICLO PARA LISTAR LA TABLA USUARIO-->
    			<?php foreach($this->model->Listar() as $r): ?>
        		<tr>
            		<td><?php echo $r->id_candidato; ?></td>
            		<td><?php echo $r->numero; ?></td>
            		<td><?php echo $r->id_organo; ?></td>
            		<td><?php echo $r->foto; ?></td>
            		<td>
               		 <a class="btn btn-success" href="?c=candidato&a=Crud&id_candidato=<?php echo $r->id_candidato; ?>"><em class="fa fa-pencil"></em>Editar</a>
            		</td>
            		<td>
                		<button class="btn btn-danger" onClick="Eliminar(<?php echo $r->id_candidato; ?>);" href=""><em class="fa fa-trash" ></em>Eliminar</button>
                        <!--href="?c=candidato&a=Eliminar&id_candidato=<?php echo $r->id_candidato; ?>"><em class="fa fa-trash"-->
						<!--
						Eliminé esta opcion de onclick:
						onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
						-->
            		</td>
        		</tr>
				<!--FIN DEL CICLO PARA LISTAR LA TABLA USUARIO-->
    			<?php endforeach; ?>
    		</tbody>
		</table>
        <script type="text/javascript">
            function Eliminar(id){
                swal({
                    title: "¿Desea eliminar este candidato?",
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
                        url: '../model/candidato-eliminar.php',
                        data: {'codig':id},
                        success: function(data) {
                            console.log(" Mensaje: " + data)
                        },
                        error: function(data) {
                            console.log("Error: " + data)
                        }
                    });
                    //mandar a recargar la pagina
                    setTimeout("location.href='../view/indexCA.php'", 1500);
                }else{
                    swal("Cancelado!", " ", "error");
                    //mandar a recargar la pagina
                    //setTimeout("location.href='../view/indexCA.php'", 1500);
                }
                });
            }       
        </script>
	</div>
</div>
<?php } ?>