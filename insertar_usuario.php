<?php 

	require('conexion.php');
	
	$nombres=$_POST['nombres'];
	$dni=$_POST['dni'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$cargo=$_POST['cargo'];
	$estado=$_POST['estado'];
				
	$sql="INSERT INTO usuarios (nombres_usuario, dni, direccion, email, cargo, estado) VALUES ('$nombres','$dni','$direccion','$email','$cargo','$estado')";
	
	$resultado=$conexion -> query($sql);
	
?>

<html>
	<head>
		<title>Insertar Usuario</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(imagenes/fondopedidos.png);
}
-->
</style></head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="usuarios.php">Regresar</a>
			
		</center>
	</body>
	</html>	