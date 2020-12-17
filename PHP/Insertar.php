
<?php 
	$mysqli = new mysqli("localhost","root","","wondercircus");
	if($mysqli->connect_errno){
		echo("fallo la conxion" . $mysqli->connect_errno);
		exit();
	}
	//$conexion=new mysqli("localhost","root","","wondercircus");
	$Obcion=$_POST['obcion']; 	
	// cerrar la conexión 
	   //-------------------------------------------------------
	   if(isset($Obcion) && !empty($Obcion) ){
			switch($Obcion){
				case "Consulta_Eventos":
						echo "<tr>";
						echo "<td>idEvt</td>";
						echo "<td>ciudad</td>";						
						echo "<td>calle</td>";
						echo "<td>col</td>";
						echo "<td>num</td>";
						echo "<td>fechaHora</td>";
						echo "<td>costo</td>";
						echo "<td>anticipo</td>";
						echo "<td>cantEmpTotal</td>";
						echo "<td>emailCte</td>";
						echo "<td>edo</td>";
						echo "<td>edoAct</td>";
						echo "</tr>";
						$consulta= "select *from detalleevento";
					if ($resultado = $mysqli->query($consulta)) {
						$x=0;
						while ($fila = $resultado->fetch_row()) {
							
							echo "<tr>"; 
							echo "<td id = 'IdT$x'> $fila[0]</td>";
							echo "<td> $fila[1]</td>";														 
							echo "<td> $fila[2]</td>"; 
							echo "<td> $fila[3]</td>"; 
							echo "<td> $fila[4]</td>"; 
							echo "<td> $fila[5]</td>"; 
							echo "<td> $fila[6]</td>"; 
							echo "<td> $fila[7]</td>"; 
							echo "<td> $fila[8]</td>"; 
							echo "<td> $fila[9]</td>"; 
							echo "<td> $fila[10]</td>"; 
							echo "<td> $fila[11]</td>";
							echo "<td> <button id='btm$s' onclick='Eliminar($x)'>Eliminar</button></td>";
							echo "<td> <button id='btm$s' onclick='Quitartabla($x)'>Modificar</button></td>";
							echo "</tr>"; 
							$x=$x+1;
						}			
						
						//liberar el conjunto de resultados 
						$resultado->close();
					}
					$mysqli->close(); 
				break;
				//Agregar Evento
				case "Agregar_Eventos":
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
					$Instrucion="INSERT INTO detalleevento (ciudad, calle,col, num, fechaHora, costo, anticipo, cantEmpTotal, emailCte, edo,edoAct)
						values ('$ciudad', '$calle','$col', '$num', '$fechaHora', '$costo', '$anticipo', '$cantemptotal', '$emailCte', '$edo','$edoAct')";
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
				//Agregar Cliente
				case "Agregar_Cliente":
					$emailCte=$_POST['emailCte'];
					$nomCte=$_POST['nomCte'];
					$apellidoPCte=$_POST['apellidoPCte'];
					$apellidoMCte=$_POST['apellidoMCte'];
					$contrasenaCte=$_POST['contrasenaCte'];
					$telefonoCte=$_POST['telefonoCte'];
					//Ingreso
					$Instrucion="INSERT INTO cliente (emailCte, nomCte, apellidoPCte, apellidoMCte, contrasenaCte, telefonoCte)
						values ('$emailCte', '$nomCte','$apellidoPCte', '$apellidoMCte', '$contrasenaCte', '$telefonoCte')";
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
				//Agregar Empleados
				case "Agregar_Empleados":
					$emailEmp=$_POST['emailEmp'];	
					$nivel=$_POST['nivel'];	
					$nomEmp=$_POST['nomEmp'];	
					$apellidoPEmp=$_POST['apellidoPEmp'];	
					$apellidoMEmp=$_POST['apellidoMEmp'];	
					$fechaNacimiento=$_POST['fechaNacimiento'];	
					$telefonoEmp=$_POST['telefonoEmp'];	
					$contrasenaAdmin=$_POST['contrasenaAdmin'];	
					$sexo=$_POST['sexo'];
					//Ingreso
					$Instrucion="INSERT INTO empleado (emailEmp,	nivel,	nomEmp,	apellidoPEmp,	apellidoMEmp,	fechaNacimiento,	telefonoEmp,	contrasenaAdmin	,sexo)
						values ('$emailEmp',	'$nivel'	,'$nomEmp',	'$apellidoPEmp',	'$apellidoMEmp',	'$fechaNacimiento',	'$telefonoEmp'	,'$contrasenaAdmin'	,'$sexo')";
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
				//Agregar Paquete
				case "Agregar_Paquetes":	
					$nombrePte=$_POST['nombrePte'];	 
					$tipo=$_POST['tipo'];	
					$cantEmp=$_POST['cantEmp'];	
					$showDes=$_POST['showDes'];					
					//Ingreso
					$Instrucion="INSERT INTO paquete (nombrePte,tipo,cantEmp,showDes)
						values ('$nombrePte','$tipo','$cantEmp','$showDes')";
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
				//Agregar Pago
				case "Agregar_Pago":	 
					$idEvt=$_POST['idEvt'];	
					$idPte=$_POST['idPte'];	
					$emailEmp=$_POST['emailEmp'];	
					$pago=$_POST['pago'];				
					//Ingreso
					$Instrucion="INSERT INTO evento (idEvt	,idPte	,emailEmp	,pago)
						values ('$idEvt'	,'$idPte'	,'$emailEmp',	'$pago')";
					if(!$mysqli->query($Instrucion)){
						echo $mysqli->connect_errno;
					}else{
						echo 1;
					}
					$mysqli->close(); 
				break;
				//Eliminar Eventos
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