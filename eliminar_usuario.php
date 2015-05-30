<?php
	require('conexion.php');
	$id_usuarios=$_GET['id_usuarios'];
	
	$sql="DELETE FROM usuarios WHERE id_usuarios='$id_usuarios'";
	
	
	$resultado=$conexion -> query($sql);
?>

<html>
	<head>
		<title>Eliminar Usuarios</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="usuarios.php?id_usuarios=<?php echo $id_usuarios ?>">Regresar</a>
			
			
			
		</center>
	</body>
</html>