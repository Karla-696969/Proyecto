 <?php
include("ENCABEZADO_INCLUDE.HTML");
include ("MENU_INCLUDE.HTML");
?>
    
	<div align="center">
	         <marquee direction="down" width="1280" height="90" behavior="alternate">
		   <marquee behavior="alternate">
	 	   <font face="stencil" size="6" color="1F1F1F"> <i> <b> <span style="background-color:silver"> EVALUE NUESTRO SITIO PARA BRINDARLE UN MEJOR SERVICIO </span> </b> </i>  </font> 
	  </marquee> </marquee>  </div> 
	  
	   <center> 
   <form method="get" action="MuestraInformacion.php">  
   <table border="3" bgcolor="silver" border color="627B56">
   	   	   

   <center>
   <br> <br>
  <tr> <td> <center> NOMBRE COMPLETO: </td> <td> <input name="nombre_completo" size="50" type="text"> <br> <br> </center> </td> </tr>  
  <tr> <td> <center> CORREO ELECTRONICO: </td> <td> <input name="correo_electronico" size="50" type="text"> <br> <br> </center>  </td> </tr> 
  
  <tr> <td> <center> GENERO: </td> <td> <select name="genero">
            <option> FEMENINO  
		    <option> MASCULINO		
  </select> <br> <br> </td> </center> </tr>
		
			
  <tr> <td> <center> Te gusto el sitio?: </td> <td> <select name="evaluar">
            <option> SI 
		    <option> NO 
			<option> MAS O MENOS
  </select> <br> <br> </center> </td> </tr>
		
			
  <tr> <td> <center> Que te parecio el contenido?: </td> <td> <input name="contenido" value="malo" type="radio"> MALO *
  <input name="contenido" value="regular" type="radio"> REGULAR **
  <input name="contenido" value="bueno" type="radio"> BUENO ***
  <input name="contenido" value="útil" type="radio"> UTIL ****
  <input name="contenido" value="favorable" type="radio"> FAVORABLE ***** <br> <br> </center> </td> </tr> 	

  <tr> <td> <center> Que te parecio el estilo de la pagina?: </td> <td> <input name="estilo" value="malo" type="radio"> MALO * 
  <input name="estilo" value="regular" type="radio"> REGULAR **
  <input name="estilo" value="bueno" type="radio"> BUENO ***
  <input name="estilo" value="propicio" type="radio"> PROPICIO ****
  <input name="estilo" value="satisfactorio" type="radio"> SATISFACTORIO ***** <br> <br> </center> </td> </tr>  
			  
  <tr> <td> <center> COMENTARIOS: </td> <td> <textarea name="comentarios" cols="20" rows="10"> </textarea> <br> <br> </center> </td> </tr> 
  	
      <tr> <td></td> <td> <center> <input value="ENVIAR" type="submit"> <input value="BORRAR" type="reset"> </center> </td> </tr>
	  </center>
  </table> </center> 
   </form>
  <?php
include("PIE_INCLUDE.HTML");

?>