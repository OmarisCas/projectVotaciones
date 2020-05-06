<?php
    //echo "codig del usuario logueado: " . $_SESSION["mesa"];
   if(!isset($_SESSION["name"])){
    session_start();
    require_once "error_usuarioJU.php";
    //header("location: ../../view/usuario/error_usuarioUSJU.php");
    }else{//esta opcion si se necesita para cuando el jurado ya tenga una sesion activa
        require_once '../model/reloj.php';
?>

<div class="panel" style="text-align: left; font-size: 16px;">
    <img src="../assets/img/jurado.png">
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
        <button class="btn btn-default" onClick="cerrarSJU();" style="font-size: 16px;"><i class="fa fa-power-off" aria-hidden="true"></i>   Cerrar Sesión
        </button>
    </div>
</div>

<h1 class="page-header"><span class="glyphicon glyphicon-user"></span>          Lista de Usuarios</h1>
<?php $cont=1; $cont2=1; ?>
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
					<th><i class="fa fa-check" aria-hidden="true"></i></th>
					<th><i class="fa fa-times" aria-hidden="true"></i></th>
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
                        <?php $code = $r->codigo; $state = $r->id_estado_usuario; $prog = $r->id_programa; $rolID = $r->id_rol; ?>
                		<button class="btn btn-success" id="success<?php echo $cont?>" onclick="funcion_autorizar(<?php echo $code ?>, <?php echo $state ?>, '<?php echo $rolID ?>')">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </button>
            		</td>

                    <?php $cont++; ?>
            		
                    <td>
                		<button class="btn btn-danger" id="danger<?php echo $cont2?>" onclick="funcion_desautorizar(<?php echo $code ?>, <?php echo $state ?>, '<?php echo $rolID ?>')">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
            		</td>

                    <?php $cont2++; ?>

        		</tr>
				<!--FIN DEL CICLO PARA LISTAR LA TABLA USUARIO-->
    			<?php endforeach; ?>
    		</tbody>
		</table>
	</div>
</div>

<!--CONDICIÓN PARA DESAHIBILITAR LOS BOTONES DE AUTORIZAR ENTRE LAS 12:00 AM Y 7:59 AM-->
<!--CONDICIÓN PARA DESAHIBILITAR LOS BOTONES DE AUTORIZAR ENTRE LAS 4:00 PM Y 11:59 PM-->
<?php
if( ($hora<$inicioAM_2 && $zona=='am') || ($hora>$inicioPM && $zona=='pm') ){

        while($cont!=0 || $cont2!=0){
            echo "<script> $('#success$cont').attr('disabled', true); </script>"; $cont--;
            echo "<script> $('#danger$cont2').attr('disabled', true); </script>"; $cont2--;
        }

}
?>

<?php } ?>