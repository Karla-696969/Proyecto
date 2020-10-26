<?php
include("ENCABEZADO_INCLUDE.HTML");
include ("MENU_INCLUDE.HTML");
?>

     <marquee direction="down" width="1280" height="90" behavior="alternate">
		   <marquee behavior="alternate">
	 	   <font face="stencil" size="6" color="1F1F1F"> <i> <b> <span style="background-color:silver"> CORROBORE SU INFORMACIÓN </span> </b> </i>  </font> 
	  </marquee> </marquee>  </div> 
 
          <center>
		  
		
		  
		
		  <?php
		  if ((isset ($_POST["telefono"])) && (isset ($_POST["edad"])) && (isset ($_POST["sexo"])) && (isset ($_POST["ubicacion"])) && (isset ($_POST["producto"])) && (isset ($_POST["material"])) && (isset ($_POST["piezas"])) && (isset ($_POST["LUGAR"])))
		  
	      $datost ['TELEFONO A CONTACTAR']= $_POST["telefono"]; 
	      $datose ['EDAD']= $_POST["edad"];
		  $datoss ['SEXO']= $_POST ["sexo"];
		  $datos1 ['UBICACIÓN']= $_POST["ubicacion"];
		  $datos2 ['PRODUCTO DE SU INTERES']= $_POST ["producto"];
		  $datos3 ['MATERIAL']= $_POST ["material"];
		  $datos4 ['NUMERO DE PIEZAS']= $_POST["piezas"];
		  $datos5 ['LUGAR']= $_POST ["LUGAR"];
		  
	   
	   
          echo "<br> <br>";
		  echo "<table border=3 bgcolor=silver border color=627B56>";
		  echo "<font face=cooper size=6 color=black">
		  
		  		  
		    $datose= $_POST["edad"];
			$datoss= $_POST ["sexo"];
		  if ($datose > 12 && $datose <= 18 && $datoss == 'FEMENINO') 		  
		   {
			  echo "<tr> <td> <b> ¡Buen día señorita, los siguientes datos seran enviados, a la brevedad posible lo contactaremos. </b> </td> </tr>! </b> </td> </tr>";
		   }
		   
		   		  if ($datose > 12 && $datose <= 18 && $datoss == 'MASCULINO') 		  
		   {
			  echo "<tr> <td> <b> ¡Buen día joven, los siguientes datos seran enviados, a la brevedad posible lo contactaremos. </b> </td> </tr>! </b> </td> </tr>";
		   }
		  		  
		    elseif ($datose > 18 && $datose <= 100 && $datoss == 'FEMENINO') 
		  
		     {
			   echo "<tr> <td> <b> !Buen día dama, los siguientes datos seran enviados, a la brevedad posible lo contactaremos. </b> </td> </tr>";
		     }
			 
			 		    elseif ($datose > 18 && $datose <= 100 && $datoss == 'MASCULINO') 
		  
		     {
			   echo "<tr> <td> <b> !Buen día señor, los siguientes datos seran enviados, a la brevedad posible lo contactaremos. </b> </td> </tr>";
		     }
			   		      			  
			      else 
			       {
				     echo "<tr> <td> <b> Indica tu edad </b> </td> </tr>"; 
			       }
	   
		  $datos1= $_POST["ubicacion"];
		  if ($datos1 == 'Ciudad de México') 		  
		   {
			  echo "<tr> <td> <b> ¡Usted vive dentro de la Ciudad de México, su cotización puede ser realizada a domicilio si así lo desea. </b> </td> </tr>";
		   }
		  		  
		    elseif ($datos1 == 'Estado de México') 
		  
		     {
			   echo "<tr> <td> <b> Su cotización únicamente puede ser realizada por los medios mencionados en el área de cotizaciones </b> </td> </tr>";
		     }
			   
		       elseif ($datos1 == 'Provincia')
			   {
		         echo "<tr> <td> <b> No contamos con servicio a provincia por el momento, su producto se elaboraría y sería entregado dentro de la Ciudad de México o bien se enviaría por paquetería con costo extra </b> </td> </tr>";
			   }
			  
			      else 
			       {
				     echo "<tr> <td> <b> Seleccione su ubicación </b> </td> </tr>"; 
			       }
			  
		  $datos2= $_POST ["producto"];
		  
		  if ($datos2 == 'puerta') 
		  {
			echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";			
		  }
		  
		    elseif ($datos2 == 'proteccionesventana')
		    {
			  echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
		    }
			  
			  elseif  ($datos2 == 'rejas')
			  {
				  echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
			  }
			  
			    elseif ($datos2 == 'barandales')
				{ 
				  echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
				}
				
				  elseif  ($datos2 == 'escaleras')
				  {
					echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
				  }
				    
					elseif ($datos2 == 'barras frías')
					{
					  echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
					}
					  
					  elseif ($datos2 == 'cubiertas')
					  {
					  echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
					  }
					    
						elseif ($datos2 == 'marquesinas')
					    {
					      echo "<tr> <td> <b> Por favor envíe una foto del diseño de su gusto al WhatsApp 55-59-64-15-10 </b> </td> </tr>";
						}
						  
						    else 
		                    {
			                  echo " <tr> <td> <b> Seleccione un producto </b> </td> </tr>";							 
		                    }	

          		  $datos3= $_POST ["material"];
		  
		  if ($datos3 == 'metal') 
		  {
			echo "<tr> <td> <b> Su pieza sera cotizada en Metal </b> </td> </tr>";			
		  }
		  
		    elseif ($datos3 == 'madera')
		    {
			  echo "<tr> <td> <b> Su pieza sera cotizada en Madera </b> </td> </tr>";
		    }
			  
			  elseif  ($datos3 == 'aluminio')
			  {
				  echo "<tr> <td> <b> Su pieza sera cotizada en Aluminio</b> </td> </tr>";
			  }
			  
			    elseif ($datos3 == 'hierro')
				{ 
				  echo "<tr> <td> <b> Su pieza sera cotizada en Hierro </b> </td> </tr>";
				}
				
				  elseif  ($datos3 == 'forja')
				  {
					echo "<tr> <td> <b> Su pieza sera cotizada en Forja </b> </td> </tr>";
				  }
				    
					else
					{
					  echo "<tr> <td> <b> Indiquenos el material que requiere su pieza </b> </td> </tr>";
					}							
		 		 
		  $datos4= $_POST["piezas"];
		  
		  if ($datos4 == 1)  
		  {
			  echo "<tr> <td> <b> Usted selecciono $datos3 piezas a cotizar. </b> </td> </tr>";
		  }
		  
		    elseif ($datos4 == 2)
			{
			   echo "<tr> <td> <b> ¡Usted tiene un %descuento a partir de este momento en su segunda pieza! </b> </td> </tr>";
			}
			  
			  elseif ($datos4 == 3)
			  {
			     echo "<tr> <td> <b> ¡Usted tiene un %descuento en uno de sus productos! </b> </td> </tr>";
			  }
			    
				elseif ($datos4 == "4 ó más") 
				{
					echo "<tr> <td> <b> ¡Usted tiene un %descuento en uno de sus productos! </b> </td> </tr>";
				}
				  
				    else 
		            {
			           echo "<tr> <td> <b> Seleccione número de piezas a cotizar </b> </td> </tr>"; 
					}			
					
												  
		  $datos5= $_POST ["LUGAR"];
		  
		  if ($datos5 == 'HOGAR')
		  {
			  echo "<tr> <td> <b> $datos5 </b> </td> </tr> ";
		  }
		  
		    elseif  ($datos5 == 'NEGOCIO')
			{
				echo  "<tr> <td> <b> $datos5 </b> </td> </tr> ";
			}
			
			  elseif ($datos5 == 'CALLE')
			  {
				  echo "<tr> <td> <b> $datos5 </b> </td> </tr> ";
			  }
			  
			     else 
		         {
			        echo " <tr> <td> <b> Seleccione el lugar donde se trabajara </b> </td> </tr>";
		         }
				  			 		 
		 		  
		         
					  
					     if (isset ($_POST["caracteristicas"]))
						 $datos6['DESCRIBA LAS CARACTERISTICAS DE SU PRODUCTO']= $_POST ["caracteristicas"];
						  foreach ($datos6 as $valor)
		                    {									     		   
		                         $mayust=ucwords ($valor); 
								  echo "<tr> <td> <b> <u> $mayust </u> </b> </td> </tr>";
							}								  
		                      
							    if (isset ($_POST["telefono"]))
						 $datost['TELEFONO A CONTACTAR']= $_POST ["telefono"];
						  foreach ($datost as $valor)
		                    {		
                                   $mayust=ucwords ($valor);							
								  echo "<tr> <td> <b> <u> $mayust </u> </b> </td> </tr>";
							}								  
			
		  
	 
		  
		 echo "</table>";    
		 echo "<br> <br>"; 
		 echo "</font>";
  
include ("PIE_INCLUDE.HTML");
?>
		
	</center>	
   
   
   
        
		  
		     