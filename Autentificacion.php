<?php
session_start();
  if (isset($_SESSION["autorizado"]) && $_SESSION["autorizado"]==TRUE)
  {	  	
 header('location:Principal.php');
  }
	


?>

<html>
 <head>
  <title> Autentificación </title>
 </head>
  <body bgcolor="0094cd">
    <center>
     <form method="post" action="validacion.php">
	 
     USUARIO: <input name="usuario" size="15" type="text"> <br> 
     PASSWORD:  <input name="contraseña" size="15" type="password"> <br>
	 
     <input value="ENTRAR" type="submit">
	 </form>
	</center> 
	 
  </body>
</html>