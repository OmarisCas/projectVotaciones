<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=candidato">Candidatos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<!-- <form id="frm-candidato" action="?c=candidato&a=Guardar" method="post" enctype="multipart/form-data"> -->
<form id="frm-candidato" action="?c=candidato&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>ID Candidato</label>
	  <select class="form-control form-control-sm" name="id_candidato" value="" data-validacion-tipo="requerido|min:1">
		  	<?php foreach($this->model->ListarID() as $s): ?>
  				<option value="<?php echo $s->codigo; ?>"><?php echo $s->codigo; ?> - <?php echo $s->nombre1; ?> <?php echo $s->apellido1; ?></option>
		  	<?php endforeach; ?>
	  </select>
    
		<!---CODIGO EN ESPER
      <input type="text" name="id_candidato" value="echo $prod->id_candidato; " class="form-control" placeholder="Ingrese ID candidato" data-validacion-tipo="requerido|min:20" />-->
    </div>

    <div class="form-group">
        <label>Número</label>
        <input type="number" name="numero" value="<?php echo $prod->numero; ?>" class="form-control" placeholder="Ingrese numero" data-validacion-tipo="requerido|min:1" min="1" max="999"/>
    </div>
	
	<div class="form-group">
        <label>Órgano</label><br>
		<select class="form-control form-control-sm" name="id_organo" value="<?php echo $prod->id_organo; ?>" data-validacion-tipo="requerido|min:1">
			<?php foreach($this->model->ListarOrgano() as $r): ?>
  				<option value="<?php echo $r->id_organo; ?>"><?php echo $r->nombre; ?></option>
			<?php endforeach; ?>
		</select>
    </div>

    <div class="form-group">
        <label>Foto</label><br>
		<input type="text" name="foto" value="<?php echo $prod->foto; ?>" class="form-control" placeholder="Ingrese foto" data-validacion-tipo="requerido|min:1"/>
		<!--
		<label class="btn btn-default btn-file">
    		Seleccionar imagen<input type="file" name="foto" value="<?php echo $prod->foto; ?>" style="display: none;">.jpg
		</label>
		-->
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<!--
<script type="text/javascript">
function adicionar(id){
  alert("Estas dentro de la funcion" + id);
  jQuery.ajax({
    //url:'../?c=candidato&a=Guardar',
    url:'../model/candidato-nuevo',
    type: 'POST',
  }).done(
    function(respuesta)
    {
      alert(respuesta);
    }
  );
}
</script>
-->

<script>
    $(document).ready(function(){
        $("#frm-candidato").submit(function(){
            return $(this).validate();
        });
    })
</script>