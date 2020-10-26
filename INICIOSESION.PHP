<?php

include("ENCABEZADO_INCLUDE.HTML");
include ("MENU_INCLUDE.HTML");


	
	if (isset($_POST["usuario"]) && (isset($_POST["contraseña"])))
	{	
	
	session_start();
	$_SESSION ['usuario']=$_POST ['contraseña']; 
		
	header('location:formularioproyecto.php');	
	}  


?>


    <center>
     <form method="post" action="validacionproyecto.php">
	 
     USUARIO: <input name="usuario" size="15" type="text"> <br> 
     PASSWORD:  <input name="contraseña" size="15" type="password"> <br>
	 
     <input value="ENTRAR" type="submit">
	 </form>
	</center> 
	 
 <?php
  include ("PIE_INCLUDE.HTML");