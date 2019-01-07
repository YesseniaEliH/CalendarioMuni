<?php

if(count($_POST)>0){
	$user = ProjectData::getById($_POST["id"]);

	$user->nombres = $_POST["nombres"];
	$user->apellidos = $_POST["apellidos"];
	$user->cargo = $_POST["cargo"];
	$user->update();


print "<script>window.location='index.php?view=contacts';</script>";


}


?>
