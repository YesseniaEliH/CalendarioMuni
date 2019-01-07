<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newcontact" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Responsable</a>
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/medicss-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div> -->
</div>
		<h1>Responsables</h1>
<br>
		<?php

		$users = ProjectData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cargo</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->id; ?></td>
				<td><?php echo $user->nombres; ?></td>
				<td><?php echo $user->apellidos; ?></td>
				<td><?php echo $user->cargo; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editcontact&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delcontact&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>

				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Responsables</p>";
		}


		?>


	</div>
</div>
