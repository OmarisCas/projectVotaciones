<h1 class="page-header">
    <?php echo $pvd->codigo != null ? $pvd->nombre1 : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=usuario">Usuarios</a></li>
  <li class="active"><?php echo $pvd->codigo != null ? $pvd->nombre1 : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-usuario" action="?c=usuario&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="codigo" value="<?php echo $pvd->codigo; ?>" />

    <div class="form-group">
        <label>Primer Nombre</label>
        <input type="text" name="nombre1" value="<?php echo $pvd->nombre1; ?>" class="form-control" placeholder="Ingrese primer nombre" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Segundo Nombre</label>
        <input type="text" name="nombre2" value="<?php echo $pvd->nombre2; ?>" class="form-control" placeholder="Ingrese segundo nombre" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Primer Apellido</label>
        <input type="text" name="apellido1" value="<?php echo $pvd->apellido1; ?>" class="form-control" placeholder="Ingrese primer apellido" data-validacion-tipo="requerido|min:1" />
    </div>
	
	<div class="form-group">
        <label>Segundo Apellido</label>
        <input type="text" name="apellido2" value="<?php echo $pvd->apellido2; ?>" class="form-control" placeholder="Ingrese segundo apellido" data-validacion-tipo="requerido|min:1" />
    </div>
	
	<div class="form-group">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $pvd->password; ?>" class="form-control" placeholder="Ingrese password" data-validacion-tipo="requerido|min:5" />
    </div>
	
	<div class="form-group">
        <label>Tipo usuario</label><br>
			<select class="form-control form-control-sm" name="id_tipo_usuario" value="<?php echo $pvd->id_tipo_usuario; ?>" data-validacion-tipo="requerido|min:1">
				<option><?php echo $pvd->id_tipo_usuario; ?></option>
  				<?php foreach($this->model->ListarTipoUsuario() as $r): ?>
					<option value="<?php echo $r->id_tipo_usuario; ?>"><?php echo $r->id_tipo_usuario; ?> - <?php echo $r->nombre; ?></option>
				<?php endforeach; ?>
			</select>
        <!--<input type="text" name="id_tipo_usuario" value="AQUI VA PHP" class="form-control" placeholder="Seleccione" data-validacion-tipo="requerido|min:40" /> -->
    </div>
	
	<div class="form-group">
        <label>Rol</label><br>
			<select class="form-control form-control-sm" name="id_rol" value="<?php echo $pvd->id_rol; ?>" data-validacion-tipo="requerido|min:1">
				<option><?php echo $pvd->id_rol; ?></option>
  				<?php foreach($this->model->ListarRol() as $r): ?>
					<option value="<?php echo $r->id_rol; ?>"><?php echo $r->id_rol; ?> - <?php echo $r->nombre; ?></option>
				<?php endforeach; ?>
			</select>
        <!--<input type="text" name="id_tipo_usuario" value="AQUI VA PHP" class="form-control" placeholder="Seleccione" data-validacion-tipo="requerido|min:40" /> -->
    </div>
	
	<div class="form-group">
        <label>Programa</label><br>
			<select class="form-control form-control-sm" name="id_programa" value="<?php echo $pvd->id_programa; ?>" data-validacion-tipo="requerido|min:1">
				<option><?php echo $pvd->id_programa; ?></option>
  				<?php foreach($this->model->ListarPrograma() as $r): ?>
					<option value="<?php echo $r->id_programa; ?>"><?php echo $r->id_programa; ?> - <?php echo $r->nombre; ?></option>
				<?php endforeach; ?>
			</select>
        <!--<input type="text" name="id_tipo_usuario" value="AQUI VA PHP" class="form-control" placeholder="Seleccione" data-validacion-tipo="requerido|min:40" /> -->
    </div>
	
	<div class="form-group">
        <label>Mesa</label><br>
			<select class="form-control form-control-sm" name="id_mesa" value="<?php echo $pvd->id_mesa; ?>" data-validacion-tipo="requerido|min:1">
				<option><?php echo $pvd->id_mesa; ?></option>
  				<?php foreach($this->model->ListarMesa() as $r): ?>
					<option value="<?php echo $r->id_mesa; ?>"><?php echo $r->nombre; ?></option>
				<?php endforeach; ?>
			</select>
        <!--<input type="text" name="id_tipo_usuario" value="AQUI VA PHP" class="form-control" placeholder="Seleccione" data-validacion-tipo="requerido|min:40" /> -->
    </div>
	
	<div class="form-group">
        <label>Estado</label><br>
			<select class="form-control form-control-sm" name="id_estado_usuario" value="<?php echo $pvd->id_estado_usuario; ?>" data-validacion-tipo="requerido|min:1">
				<option><?php echo $pvd->id_estado_usuario; ?></option>
  				<?php foreach($this->model->ListarEstado() as $r): ?>
					<option value="<?php echo $r->id_estado_usuario; ?>">
						<?php echo $r->id_estado_usuario; ?> - <?php echo $r->nombre; ?>
					</option>
				<?php endforeach; ?>
			</select>
        <!--<input type="text" name="id_tipo_usuario" value="AQUI VA PHP" class="form-control" placeholder="Seleccione" data-validacion-tipo="requerido|min:40" /> -->
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>
