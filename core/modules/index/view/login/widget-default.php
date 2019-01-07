<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>


<br><br><br><br><br>
<div class="row vertical-offset-100" >
<br>

    	<div class="col-md-4 col-md-offset-3 col-sm-6 col-xs-12"  >

    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>
    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>
    		<div class="panel panel-primary"  >
				  <div class="panel-heading" style="background-color:#DFC728"  >
				  	<img class="img-responsive" src="img/munipasco.png" align="left"  width="145 " height="70" >
				  	<br><br><br>
				    	<h3 class="panel-title" ></h3>
				 	</div>
			  	<div  class="panel-body"  >
			    	<form  accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin" >
                        <br>
                    <fieldset>
							    	  	<div class="form-group">
							    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
							    		</div>
							    		<div class="form-group">
							    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
							    		</div>
				                        <br>
							    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar Sesion">
				                        <br>
							    	</fieldset>
		 	      	</form>
						</div>
					</div>
					<div class="right-box" style="background-image: url(img/mun.jpg); margin-left:-10px" >
						<span class="signinwith">AGENSIS<br/></span>
						<br><br><br><br><br><br><br>
						<span class="pasco">PASCO<br/>Peru<br/>
						</span>
					</div>

		</div>

	</div>
