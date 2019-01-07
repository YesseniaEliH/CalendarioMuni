<?php
$empleado = ProjectData::getAll();
$area = CategoryData::getAll();
?>

<div class="row">
<div class="col-md-10">
<h1>Nueva Actividad</h1>
<form class="form-horizontal" role="form" method="post" action="./?action=addreservation">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha/Hora</label>
    <div class="col-lg-5">
      <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
    <div class="col-lg-5">
      <input type="time" name="time_at"  class="form-control" id="inputEmail1" placeholder="Hora">
    </div>
  </div>  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" name="title" required class="form-control" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
    <textarea class="form-control" rows="5" name="description" placeholder="Descripcion"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Responsable</label>
    <div class="col-lg-4">
      <select name="project_id" class="form-control">
        <option value="">Seleccione el responsable</option>
          <?php foreach($empleado as $p):?>
            <option value="<?php echo $p->id; ?>"><?php echo $p->nombres.' '.$p->apellidos; ?></option>
          <?php endforeach; ?>
        </select>
            </div>
            <label for="inputEmail1" class="col-lg-2 control-label">Area</label>
            <div class="col-lg-4">
        <select name="category_id" class="form-control">
        <option value="">Seleccione el área</option>
          <?php foreach($area as $p):?>
            <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
          <?php endforeach; ?>
      </select>
    </div>
  </div>
  <!-- <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Ubicación</label>
    <div class="col-lg-10">
      <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&coord=-10.686226,-76.25743060000002&q=Municipalidad%20Provincial%20de%20Pasco%2C%20Avenida%20Circunvalacion%20Arenales%2C%20Cerro%20De%20Pasco%2C%20Per%C3%BA+()&ie=UTF8&t=&z=16&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/crear-un-mapa-de-google/">crear mapa Google Maps</a> by <a href="https://www.mapsdirections.info/">Mapa Pasco</a></iframe></div><br />
    </div>
</div> -->
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Agregar Evento</button>
    </div>
  </div>
</form>

</div>
</div>
