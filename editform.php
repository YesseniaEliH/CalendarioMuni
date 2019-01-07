<?php
	error_reporting( ~E_NOTICE );
	require_once 'dbconfig.php';

	if(isset($_GET['edit_id']) && ($_GET['eveid']))
	{
		$id = $_GET['edit_id'];
		$id_evento = $_GET['eveid'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM evidencias WHERE img_id =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: index.php");
	}

	if(isset($_POST['btn_save_updates']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

		if($imgFile)
		{
			$upload_dir = 'user_images/'; // upload directory
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{
				if($imgSize < 1000000)
				{
					unlink($upload_dir.$edit_row['ev_img']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Su archivo es demasiado grande mayor a 1MB";
				}
			}
			else
			{
				$errMSG = "Solo archivos JPG, JPEG, PNG & GIF .";
			}
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['ev_img']; // old image from database
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE evidencias
									     SET descripcion=:uname,
										     estado=:ujob,
										     ev_img=:upic
								       WHERE img_id=:uid');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);

			if($stmt->execute()){
				?>
                <script>
				alert('Actualizado con Éxito ...');
				window.location.href='addnew.php?id=<?php echo $id_evento?>';
				// header("refresh:2;addnew.php?id=$id_evento");
				</script>
                <?php
			}
			else{
				$errMSG = "Los datos no fueron actualizados !";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<!-- <title>Subir, Insertar, Actualizar, Borrar una imágen usando PHP y MySQL</title> -->

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<br>


<div class="container">


	<div class="alert alert-info">
	    <strong>Actualizar Evidencias</strong>
	</div>

<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">


    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>


	<table class="table table-bordered table-responsive">

    <tr>
    	<td><label class="control-label">Marca.</label></td>
        <td><input class="form-control" type="text" name="user_name" value="<?php echo $descripcion; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Tipo.</label></td>
        <td><input class="form-control" type="text" name="user_job" value="<?php echo $estado; ?>" required /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Imágen.</label></td>
        <td>
        	<p><img src="user_images/<?php echo $ev_img; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="user_image" accept="image/*" />
        </td>
    </tr>

    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> Actualizar
        </button>

        <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-backward"></span> cancelar </a>

        </td>
    </tr>

    </table>

</form>




</div>
</body>
</html>
