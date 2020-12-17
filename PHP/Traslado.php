<?php 
	$conexion=new mysqli("localhost","root","","wondercircus");
    
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
	$sqlInsert="INSERT INTO detalleevento (ciudad, calle,col, num, fechaHora, costo, anticipo, cantEmpTotal, emailCte, edo,edoAct)
		values ('$ciudad', '$calle','$col', '$num', '$fechaHora', '$costo', '$anticipo', '$cantemptotal', '$emailCte', '$edo','$edoAct')";
	 if(!mysqli_query($conexion, $sqlInsert)){
		 echo mysqli_errno($conexion);
	 }else{
		 echo 1;
	 }	 	
	// cerrar la conexión 
    mysqli_close($conexion);    
 ?>