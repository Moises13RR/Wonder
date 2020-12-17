
<?php
	$mysqli = new mysqli("localhost","root","","wondercircus");
	if($mysqli->connect_errno){
		echo("fallo la conxion" . $mysqli->error);
		exit();
	}
	//$conexion=new mysqli("localhost","root","","wondercircus");
    $Obcion=$_POST['obcion']; 
    
	// cerrar la conexión 
	   //-------------------------------------------------------
	   if(isset($Obcion) && !empty($Obcion) ){
			switch($Obcion){				
				//Eliminar Eventos
				case "Eliminar_Eventos":
                    $IdEliminar=$_POST['IdEliminar'];				
                    $Instrucion="DELETE FROM detalleevento where detalleevento.idEvt = $IdEliminar";
                    if(!$mysqli->query($Instrucion)){
						echo $mysqli->errno;
						 
					}else{
						echo 1;
					}
					$mysqli->close(); 
				 break;
				//Eliminar Cliente
				case "Eliminar_Cliente": 
					$IdEliminar=substr($_POST['IdEliminar'],1);
					echo "x" . $IdEliminar;	
					$Instrucion="DELETE FROM cliente where cliente.emailCte='$IdEliminar'";
					echo $Instrucion;
                    if(!$mysqli->query($Instrucion)){
						echo $mysqli->error_list;
						echo $mysqli->error;						 
					}else{
						echo 1;
					}
					$mysqli->close(); 
				 break;
				//Eliminar empleado
				case "Eliminar_Empleado": 
					$IdEliminar=substr($_POST['IdEliminar'],1);
					echo "x" . $IdEliminar;	
					$Instrucion="DELETE FROM empleado where empleado.emailEmp='$IdEliminar'";
					echo $Instrucion;
                    if(!$mysqli->query($Instrucion)){
						echo $mysqli->error_list;
						echo $mysqli->error;						 
					}else{
						echo 1;
					}
					$mysqli->close(); 
				  break;
			}
	   }
 ?>