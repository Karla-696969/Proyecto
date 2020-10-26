<html>
 <head>
  <title> UsoDatosSesion </title>
 </head>
  <body bgcolor="green">
    <?php 
		
    session_start();
		$dato= $_SESSION ['userName'];

	echo "<center>";
	echo "****Bienvenid@ **** $dato";
	echo "</center>";
    session_destroy ();
		
    ?>
   </body>
</html>