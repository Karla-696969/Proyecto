
    <?php 
	include("ENCABEZADO_INCLUDE.HTML");
    include ("MENU_INCLUDE.HTML");
		
     session_start();
		$dato= $_SESSION ['usuario'];

	echo "<center>";
	echo "<font face=cooper size=5 color=silver> BIENVENID@ $dato </font>";
	echo "</center>";
    session_destroy ();
		
    ?>
	
	 <center> 
    <form method="post" action="respuestas.php"> 
	<marquee width="50%" bgcolor="silver"> <font face="cooper" size="5" color="1F1F1F"> REALICE SU COTIZACIÓN </font> </marquee> 
   <table  border="3" bgcolor="silver" border color="627B56">
   <br> 
   <br>
   

  <tr> <td> EDAD: </td> <td> <input name="edad" size="3" type="text"> </td> </tr>
  
  <tr> <td> SEXO: </td> <td> <select name="sexo">
            <option> -SELECCIONE-
            <option> FEMENINO  
		    <option> MASCULINO			
		   </select> <br> <br> </td> </tr>
  
  <tr> <td> UBICACIÓN: </td> <td> <input name="ubicacion" value="Ciudad de México" type="radio"> Ciudad de México
  <input name="ubicacion" value="Estado de México" type="radio">  Estado de México
  <input name="ubicacion" value="Provincia" type="radio"> Provincia <br> <br> </td> </tr> 
  
  
  <tr> <td> PRODUCTO DE SU INTERES: </td> <td> <input name="producto" value="puerta" type="radio"> PUERTA 
  <input name="producto" value="proteccionesventana" type="radio">  VENTANAS
  <input name="producto" value="rejas" type="radio"> REJAS
  <input name="producto" value="portones" type="radio"> PORTONES
  <input name="producto" value="barandales" type="radio"> BARANDALES
  <input name="producto" value="escaleras" type="radio"> ESCALERAS 
  <input name="producto" value="barras" type="radio"> BARRAS FRÍAS
  <input name="producto" value="cubiertas" type="radio"> CUBIERTAS
  <input name="producto" value="marquesinas" type="radio"> MARQUESINAS <br> <br> </td> </tr> 
  
   <tr> <td> MATERIAL CON EL QUE REQUIERE SER ELABORADO: </td> <td> <input name="material" value="metal" type="radio"> METAL 
  <input name="material" value="madera" type="radio">  MADERA
  <input name="material" value="aluminio" type="radio"> ALUMINIO 
  <input name="material" value="hierro" type="radio"> HIERRO
  <input name="material" value="forja" type="radio"> FORJA
  
   <tr> <td> NUMERO DE PIEZAS: </td> <td> <input name="piezas" value="yes" type="checkbox"> 1  
            <br>  <input name="piezas" value="2" type="checkbox"> 2  
		    <br>  <input name="piezas" value="3" type="checkbox"> 3  
		    <br>  <input name="piezas" value="4" type="checkbox"> 4 ó más </td> </tr> 
  <tr> <td> LUGAR: </td> <td> <select name="LUGAR">
            <option> -SELECCIONE-
            <option> HOGAR  
		    <option> NEGOCIO
			<option> CALLE			
		   </select> <br> <br> </td> </tr>
		   
  <tr> <td> DESCRIBA LAS CARACTERISTICAS DE SU PRODUCTO ASÍ COMO DIMENSIONES Y DETALLES IMPORTANTES A DESTACAR. </td> <td> <textarea name="caracteristicas" cols="20" rows="10"> </textarea> <br> <br> </td> </tr> 

   <tr> <td> TELEFONO A CONTACTAR </td> <td> <input name="telefono" size="50" type="text"> <br> <br> </td> </tr>

	
      <tr> <td></td> <td> <input value="ENVIAR" type="submit"> <input value="BORRAR" type="reset"> </td> </tr>
  </table> </center> 
   </form>
	
	
	
	
  <?
    
    include(PIE_INCLUDE.HTML);
  ?>