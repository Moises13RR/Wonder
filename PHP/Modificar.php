
<?php 
	$mysqli = new mysqli("localhost","root","","wondercircus");
	if($mysqli->connect_errno){
		echo("fallo la conxion" . $mysqli->connect_errno);
		exit();
	}
	$Obcion=$_POST['obcion']; 	
	   //-------------------------------------------------------
	   if(isset($Obcion) && !empty($Obcion) ){
			switch($Obcion){
				case "Consulta_Evento":
						$Consulta= $_POST['Consulta'];
					if ($resultado = $mysqli->query("$Consulta")) {
						$x=0;
						while ($fila = $resultado->fetch_row()) {	
							echo " <fieldset>";										 
							echo "<form id='frmajax' method='POST'>";
							echo "<input value='$fila[0]' type='text  ' name='IdEvent' id='IdEvent' class='cuadro' placeholder='ID'> <br>";
							echo "<input value='$fila[9]' type='text  ' name='emailCte' id='emailCte' class='cuadro' placeholder='Correo Cliente'> <br>";
							echo "<input value='$fila[1]' type='text  ' name='ciudad' id='ciudad' class='cuadro' placeholder='Ciudad'> <br>";
							echo "<input value='$fila[2]' type='text  ' name='calle' id='calle' class='cuadro' placeholder='Calle'> <br>";
							echo "<input value='$fila[3]' type='text  ' name='col' id='col' class='cuadro' placeholder='Colonia'> <br>";
							echo "<input value='$fila[4]' type='number' name='num' id='num' class='cuadro' style='width: 70px;' placeholder='Numero'>";
							$rest = substr($fila[5],0,10);
							$rest2 = substr($fila[5],-5);
							$rest3=$rest .'T'. $rest2;
							echo "<input value='$rest3' type='datetime-local' name='fechaHora' id='fechaHora' class='cuadro' style='width: 188px;' placeholder='Fecha y Hora'> <br>";
							echo "<input value='$fila[6]' type='number' name='costo' id='costo' class='cuadro' placeholder='Costo'> <br>";
							echo "<input value='$fila[7]' type='number' name='anticipo' id='anticipo' class='cuadro' placeholder='Anticipo'> <br>";
							echo "<input value='$fila[8]' type='number' name='cantemptotal' id='cantemptotal' class='cuadro' placeholder='Total'> <br>";
							echo "<input value='$fila[10]' type='text  ' name='edo' id='edo' class='cuadro' placeholder='Edo'> <br>";
							echo "<input value='$fila[11]' type='number' name='edoAct' id='edoAct' class='cuadro ' placeholder='Edo Act '> <br>";
							echo "<button onclick='Actualizar_Evento()'onclick='Actualizar_Evento()type='submit' id='GuardarNewDatos' onclick='Actualizar_Evento()'onclick='Actualizar_Evento()'>Guardar datos</button>";
							echo "</form>";
							echo " </fieldset>";
						}			
						
						//liberar el conjunto de resultados 
						$resultado->close();
					}
					$mysqli->close(); 
				break;
				case "Modificar_Evento":
					$IdEvent=$_POST['IdEvent'];
					$Obcion=$_POST['obcion'];
					$emailCte=$_POST['emailCte'];
					$ciudad=$_POST['ciudad'];
					$calle=$_POST['calle'];
					$col=$_POST['col'];	
					$num=$_POST['num'];
					$fechaHora=$_POST['fechaHora'];
					$costo=$_POST['costo'];
					$anticipo=$_POST['anticipo'];
					$cantemptotal=$_POST['cantemptotal'];
					$edo=$_POST['edo'];
					$edoAct=$_POST['edoAct'];
					
					$Instrucion="UPDATE detalleevento SET ciudad ='$ciudad' , calle ='$calle' , col ='$col',num='$num' , fechaHora ='$fechaHora',costo ='$costo',anticipo ='$anticipo',cantEmpTotal ='$cantemptotal',edo='$edo' ,edoAct ='$edoAct'  WHERE detalleevento.idEvt = '$IdEvent'" ;
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
				
				case "Eliminar_Eventos":
					$IdEliminar=$_POST['IdEliminar'];
					
					$Instrucion="DELETE FROM detalleevento where detalleevento.idEvt = $IdEliminar";
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
			}
	   }
 ?>