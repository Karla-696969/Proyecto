 <?php
include("ENCABEZADO_INCLUDE.HTML");
include ("MENU_INCLUDE.HTML");
?>
  <div align="center">    
		 <marquee direction="down" width="1250" height="90" behavior="alternate">
		   <marquee behavior="alternate">
 
 
	   <font face="stencil" size="6" color="1F1F1F"> <i> <b> <span style="background-color:silver"> CORROBORE SU INFORMACIÓN </span> </b> </i>  </font> 
	  </marquee> </marquee>  </div> 
          <center>
		  
		
		  
		  <?php
		  if ((isset ($_GET["nombre_completo"])) && (isset ($_GET["correo_electronico"])) && (isset ($_GET["genero"])) && (isset ($_GET["evaluar"]))  && (isset ($_GET["contenido"]))  && (isset ($_GET["estilo"]))  && (isset ($_GET["comentarios"])))
		  
		  $datos ['NOMBRE COMPLETO']= $_GET ["nombre_completo"];
		  $datos ['CORREO ELECTRONICO']= $_GET["correo_electronico"];
		  $datos ['GENERO']= $_GET ["genero"];
		  $datos ['¿Te gusto el sitio?']= $_GET ["evaluar"];
		  $datos ['¿Que te parecio el contenido?']= $_GET["contenido"];
		  $datos ['¿Que te parecio el estilo de la página?']= $_GET ["estilo"];
		  $datos ['Comentarios']= $_GET ["comentarios"];
		  
		  echo "<br> <br>";
		  echo "<table border=3 bgcolor=silver border color=627B56>";
		  
		  foreach ($datos as $llave => $valor)
		  {
			 $mayusp=ucfirst ($llave);		     		   
		     $mayust=ucwords ($valor); 
		  
	  echo "<tr> <td> <b> $mayusp: </b> </td> <td> <u> $mayust </u> </td> </tr>"; 
		  }
		 echo "</table>";    
		 echo "<br> <br>"; 
		
include ("PIE_INCLUDE.HTML");
?>