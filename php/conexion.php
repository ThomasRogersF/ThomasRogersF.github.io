<?php 
	$usuario="root"; $contrasena=""; $servidor="localhost"; $basededatos="practica";

	$conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar al servidor");
	$db = mysqli_select_db($conexion, $basededatos) or die("No se ha podido conectar a la base de datos");
?>