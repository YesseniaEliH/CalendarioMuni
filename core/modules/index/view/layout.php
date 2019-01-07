<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.: AGENSIS</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script   src="js/bootstrap.min.js"> </script>
    <script src="js/jquery-1.10.2.js"></script>
<?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
<link href='res/fullcalendar.min.css' rel='stylesheet' />
<link href='res/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='res/js/moment.min.js'></script>
<script src='res/fullcalendar.min.js'></script>
<script src='res/es.js'></script>
<?php endif; ?>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#DFC728">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="./">AGENSIS <sup><small><span class="label label-info">v1.0</span></small></sup> </a>-->
          <div class="container" style="padding-right:27px; background-color:black">
            <a class="navbar-brand" href="./" style="color:#fff; background-color:black">AGENSIS <img class="logo-image" src="img/pasco.gif" style="height:35px;" /><strong><small> HMPP</small></strong></a>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
<?php
$u=null;
if(Session::getUID()!=""):
  $u = UserData::getById(Session::getUID());

?>

        <?php if($u->is_admin):?>
          <ul class="nav navbar-nav" style="margin-top:8px">
            <li><a href="index.php?view=newreservation"><i class="fa fa-asterisk"></i> NUEVA ACTIVIDAD</a></li>
          </ul>

          <ul class="nav navbar-nav side-nav">
          <li><a href="index.php?view=home"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="index.php?view=reservations"><i class="fa fa-calendar"></i> Actividades</a></li>
          <li><a href="index.php?view=categories"><i class="fa fa-th-list"></i> Áreas</a></li>
          <!-- <li><a href="index.php?view=contacts"><i class="fa fa-male"></i> Responsables</a></li> -->
          <li><a href="index.php?view=users"><i class="fa fa-users"></i> Responsables </a></li>
          </ul>
        <?php else:?>
          <ul class="nav navbar-nav side-nav">
          <li><a href="index.php?view=home"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="index.php?view=misActiv&idus='<?php echo($u->id);?>'"><i class="fa fa-calendar"></i>Mis Actividades</a></li>

          </ul>
        <?php endif; ?>





<?php endif;?>



<?php if(Session::getUID()!=""):?>
<?php
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
  $user = $u->name." ".$u->lastname;
  }?>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
        <a style="margin-top:8px" href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo $user; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=configuration">Configuracion</a></li>
          <li><a href="logout.php">Salir</a></li>
        </ul>
<?php else:?>
<?php endif; ?>




        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

<?php
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->

<script src="res/bootstrap3/js/bootstrap.min.js"></script>

  </body>
</html>
