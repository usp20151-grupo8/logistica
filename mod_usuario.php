<?php 
	
	require('conexion.php');
	
	$id_usuarios=$_POST['id_usuarios'];
	$nombres=$_POST['nombres'];
	$dni=$_POST['dni'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$cargo=$_POST['cargo'];
	$estado=$_POST['estado'];
	
		$sql="UPDATE usuarios SET nombres_usuario='$nombres', dni='$dni', direccion='$direccion', email='$email', cargo='$cargo', estado='$estado'  WHERE id_usuarios='$id_usuarios'";
	

	     $resultado=$conexion -> query($sql);
	
?>

<html>
	<head>
		<title>Modificar Usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario </h1>
				
			    <?php	} ?>
			
			<p></p>	
			
			<a href="usuarios.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				
