
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
                //Consultar Evento
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
							echo "<td id = 'IdC$x'> $fila[0]</td>";
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
							echo "<td> <button id='btm$s' onclick='Eliminar_Evento($x)'>Eliminar</button></td>";
							echo "<td> <button id='btm2$s' onclick='Modificar_evento('$x')'>Modificar</button></td>";
							echo "</tr>"; 
							$x=$x+1;
						}			
						
						//liberar el conjunto de resultados 
						$resultado->close();
					}
					$mysqli->close(); 
                 break;
                //Consultar Cliente
                case "Consulta_Cliente":
                    echo "<tr>";
                    echo "<td>emailCte</td>";
                    echo "<td>nomCte</td>";
                    echo "<td>apellidoPCte</td>";
                    echo "<td>apellidoMCte</td>";
                    echo "<td>contrasenaCte</td>";
                    echo "<td>telefonoCte</td>";
                    echo "</tr>";
                    $consulta= "select *from cliente";
                    if ($resultado = $mysqli->query($consulta)) {
                    $x=0;
                    while ($fila = $resultado->fetch_row()) {
                        
                        echo "<tr>"; 
                        echo "<td id = 'IdC$x'> $fila[0]</td>";
                        echo "<td> $fila[1]</td>";														 
                        echo "<td> $fila[2]</td>"; 
                        echo "<td> $fila[3]</td>"; 
                        echo "<td> $fila[4]</td>"; 
                        echo "<td> $fila[5]</td>"; 
                        echo "<td> <button id='btm$s' onclick='Eliminar_Cliente($x)'>Eliminar</button></td>";
                        echo "<td> <button id='btm2$s' onclick='Modificar_Cliente($x)'>Modificar</button></td>";
                        echo "</tr>"; 
                        $x=$x+1;
                    }			
                    
                    //liberar el conjunto de resultados 
                    $resultado->close();
                    }
                    $mysqli->close(); 
                 break;
                //Consultar Empleado
                case "Consulta_Empleado":
                    echo "<tr>";
                    echo "<td>emailEmp</td>";
                    echo "<td>nivel</td>";
                    echo "<td>nomEmp</td>";
                    echo "<td>apellidoPEmp</td>";
                    echo "<td>apellidoMEmp</td>";
                    echo "<td>fechaNacimiento</td>";
                    echo "<td>telefonoEmp</td>";
                    echo "<td>contrasenaAdmin</td>";
                    echo "<td>sexo</td>";
                    echo "</tr>";
                    $consulta= "select *from empleado";
                    if ($resultado = $mysqli->query($consulta)) {
                        $x=0;
                        while ($fila = $resultado->fetch_row()) {                    
                            echo "<tr>"; 
                            echo "<td id = 'IdC$x'> $fila[0]</td>";
                            echo "<td> $fila[1]</td>";														 
                            echo "<td> $fila[2]</td>"; 
                            echo "<td> $fila[3]</td>"; 
                            echo "<td> $fila[4]</td>"; 
                            echo "<td> $fila[5]</td>"; 
                            echo "<td> $fila[6]</td>"; 
                            echo "<td> $fila[7]</td>"; 
                            echo "<td> $fila[8]</td>"; 
                            echo "<td> <button id='btm$s' onclick='Eliminar_Empleado($x)'>Eliminar</button></td>";
                            echo "<td> <button id='btm2$s' onclick='Modificar_Empleado($x)'>Modificar</button></td>";
                            echo "</tr>"; 
                            $x=$x+1;
                        }			
                        //liberar el conjunto de resultados 
                        $resultado->close();
                    }
                    $mysqli->close(); 
                 break;     
                //Consultar Pago Empleado
                case "Consulta_Pago":
                    echo "<tr>";
                    echo "<td>idEvt</td>";
                    echo "<td>idPte	</td>";
                    echo "<td>emailEmp</td>";	
                    echo "<td>pago</td>";
                    echo "</tr>";
                    $consulta= "select *from evento";
                    if ($resultado = $mysqli->query($consulta)) {
                        $x=0;
                        while ($fila = $resultado->fetch_row()) {                    
                            echo "<tr>"; 
                            echo "<td id = 'IdC$x'> $fila[0]</td>";
                            echo "<td> $fila[1]</td>";														 
                            echo "<td> $fila[2]</td>"; 
                            echo "<td> $fila[3]</td>"; 
                            echo "<td> <button id='btm$s' onclick='Eliminar_PagoE($x)'>Eliminar</button></td>";
                            echo "<td> <button id='btm2$s' onclick='Modificar_PagoE($x)'>Modificar</button></td>";
                            echo "</tr>"; 
                            $x=$x+1;
                        }			
                        //liberar el conjunto de resultados 
                        $resultado->close();
                    }
                    $mysqli->close(); 
                 break; 
               //Consultar Paquete
                case "Consulta_Paquete":
                    echo "<tr>";
                    echo "<td>idPte</td>";
                    echo "<td>nombrePte</td>";
                    echo "<td>tipo</td>";
                    echo "<td>cantEmp</td>";
                    echo "<td>showDes</td>";
                    echo "</tr>";
                    $consulta= "select *from paquete";
                    if ($resultado = $mysqli->query($consulta)) {
                        $x=0;
                        while ($fila = $resultado->fetch_row()) {                    
                            echo "<tr>"; 
                            echo "<td id = 'IdC$x'> $fila[0]</td>";
                            echo "<td> $fila[1]</td>";														 
                            echo "<td> $fila[2]</td>"; 
                            echo "<td> $fila[3]</td>"; 
                            echo "<td> $fila[4]</td>"; 
                            echo "<td> <button id='btm$s' onclick='Eliminar_PagoE($x)'>Eliminar</button></td>";
                            echo "<td> <button id='btm2$s' onclick='Modificar_PagoE($x)'>Modificar</button></td>";
                            echo "</tr>"; 
                            $x=$x+1;
                        }			
                        //liberar el conjunto de resultados 
                        $resultado->close();
                    }
                    $mysqli->close(); 
                 break;     
        
			}
	   }
 ?>