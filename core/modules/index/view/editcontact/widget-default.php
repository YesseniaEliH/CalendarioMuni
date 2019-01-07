<?php
$user = ProjectData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Contacto</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatecontact" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres" value="<?php echo $user->nombres;?>" class="form-control" id="nombres" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" value="<?php echo $user->apellidos;?>" required class="form-control" id="apellidos" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cargo*</label>
    <div class="col-md-6">
      <input type="text" name="cargo" value="<?php echo $user->cargo;?>" class="form-control"  id="cargo" placeholder="Cargo">
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Responsable</button>
    </div>
  </div>
</form>
	</div>
</div>
