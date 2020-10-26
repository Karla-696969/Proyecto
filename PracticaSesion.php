<html>
 <head>
  <title> PRACTICA SESION </title>
 </head>
  <body bgcolor="green">
   <center>
     <form method="post">
	 
     USUARIO: <input name="userName" size="30" type="text"> <br> 
     PASSWORD:  <input name="password" size="10" type="password"> <br>
	 
     <input value="INGRESAR" type="submit">
	 </form>
	</center> 
	 
    <?php
	
	if (isset($_POST["userName"]) && (isset($_POST["password"])))
	{	
	
	session_start();
	$_SESSION ['userName']=$_POST ['userName']; 
		
	header('location:UsoDatosSesion.php');	
	}  
	?>
  </body>
</html>