<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
<!-- <a href="./index.php?view=oldreservations" class="btn btn-default pull-right">Eventos Anteriores</a> -->
		<h1>Mis Actividades</h1>
<br>

<?php
$idus =	$_GET['idus'];
$users= array();
$sql = "select * from event where user_id=$idus";

		$users = EventData::getBySQL($sql);

		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Titulo</th>
			<th>Área</th>
			<th>Fecha - H</th>
			<th>Fecha</th>
			<th>Evidencias</th>

			</thead>
			<?php
			foreach($users as $user){
				$project = null;
				if($user->project_id!=null){
				$project  = $user->getProject();
				}
				$category = null;
				if($user->category_id!=null){
				$category = $user->getCategory();
				}
				?>
				<tr>
				<td><?php echo $user->title; ?></td>
				<!-- <td><?php if($project!=null ){ echo $project->nombres;} ?></td> -->
				<td><?php if($category!=null){ echo $category->name; }?></td>
				<td><?php echo $user->date_at." ".$user->time_at; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editreservation&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delreservation&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				<td><a href="addnew.php?id=<?php echo $user->id;?>" class="btn btn-info btn-xs">Evidencia</a></td>
				</tr>

				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Actividades</p>";
		}


		?>


	</div>
</div>
