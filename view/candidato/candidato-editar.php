<ol class="breadcrumb">
  <li><a href="?c=candidato">Candidatos</a></li>
  <li class="active">Actualizar candidato</li>
</ol>

<form id="frm-candidato" action="?c=candidato&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_candidato" value="<?php echo $prod->id_candidato; ?>" />

    <div class="form-group">
        <label>Número</label>
        <input type="text" name="numero" value="<?php echo $prod->numero; ?>" class="form-control" placeholder="Ingrese número" data-validacion-tipo="requerido|min:1" />
    </div>
	
	<div class="form-group">
        <label>Órgano</label><br>
		<select class="form-control form-control-sm" name="id_organo" value="<?php echo $prod->id_organo; ?>" data-validacion-tipo="requerido|min:1">
			<option><?php echo $prod->id_organo; ?></option>
			<?php foreach($this->model->ListarOrgano() as $r): ?>
  				<option value="<?php echo $r->id_organo; ?>">
					<?php echo $r->id_organo; ?> - <?php echo $r->nombre; ?>
				</option>
			<?php endforeach; ?>
		</select>
    </div>

    <div class="form-group">
        <label>Foto</label>
        <input type="text" name="foto" value="<?php echo $prod->foto; ?>" class="form-control" placeholder="Ingrese foto" data-validacion-tipo="requerido|min:1" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-candidato").submit(function(){
            return $(this).validate();
        });
    })
</script>
