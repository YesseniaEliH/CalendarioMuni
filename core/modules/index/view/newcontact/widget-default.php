<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Responsable</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addcontact" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellidos" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cargo*</label>
    <div class="col-md-6">
      <input type="text" name="cargo" class="form-control"  id="address" placeholder="Direccion">
    </div>
  </div>


  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Contacto</button>
    </div>
  </div>
</form>
	</div>
</div>
