<?php 
session_start(); 
if(!isset($_SESSION['intentos'])) 
 {$_SESSION['intentos'] = 0 ;}
                                 
	if ($_SESSION['intentos'] < 3 )
	{ 
		require_once('funciones.php'); 
		conectar('localhost', 'root', 'simplementemas', 'logistica_restaurant'); 
		$usuario = strip_tags($_POST['usuario']); 
		$clave = strip_tags(sha1($_POST['clave']));   
		$query = @mysql_query('SELECT * FROM usuarios WHERE usuario="'.mysql_real_escape_string($usuario).'" AND clave="'.mysql_real_escape_string($clave).'"'); 
	
		if ($existe = @mysql_fetch_object($query)) 
		 { 
 		 $_SESSION['logged'] = 'yes'; 
   		 $_SESSION['usuario'] = $usuario; 
     	 echo '<script>window.location="logeado.php"</script>'; 
		 } 
		else 
		{ $_SESSION['intentos'] ++ ; 
		
		echo 'El usuario y/o pass son incorrectos.'.$_SESSION['intentos'];}
	} 
	else
 	{
	
	echo 'limite de intentos superado.' .$_SESSION['intentos'];
	
	session_destroy();
	
	header('Location: http://www.google.com.pe');

	}

?>

