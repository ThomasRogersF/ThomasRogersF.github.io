<?php 
	//almacena en la base de datos
	include('conexion.php');
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$mensaje=$_POST['mensajes'];
 	$consulta = "INSERT INTO contactos VALUES (NULL,'".$nombre."', '".$email."', '".$mensaje."')";
 	$resultado = mysqli_query($conexion, $consulta);
 	echo 1;
?>