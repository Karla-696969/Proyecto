<?php
include("ENCABEZADO_INCLUDE.HTML");
include ("MENU_INCLUDE.HTML");

if (isset($_POST["usuario"]) && $_POST["usuario"]=="IRON"  && (isset($_POST["contraseña"]) && $_POST["contraseña"]=="666999")) 
	{	
     session_start();
	 $_SESSION["autorizado"]=TRUE;
	 $_SESSION ['usuario']=$_POST ['usuario']; 
	 header('location:formularioproyecto.php');
	}
	 else 
	 {   
         echo "<center>";
         echo "El usuario o contraseña son incorrectos";
		 header('location:INICIOSESION.php');
		 echo "</center>";
	 }
	
	

include ("PIE_INCLUDE.HTML");

?>