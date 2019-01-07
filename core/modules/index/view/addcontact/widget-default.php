<?php

if(count($_POST)>0){
	$user = new ProjectData();
	$user->nombres = $_POST["nombres"];
	$user->apellidos = $_POST["apellidos"];
	$user->cargo = $_POST["cargo"];
	$user->add();

print "<script>window.location='index.php?view=contacts';</script>";


}


?>
