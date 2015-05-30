<?php
require_once('funciones.php');
conectar('localhost', 'root', 'simplementemas', 'logistica_restaurant');

//Recibir
$usuario = strip_tags($_POST['usuario']);
$dni = strip_tags($_POST['dni']);
$clave = strip_tags(sha1($_POST['clave']));
$email = strip_tags($_POST['email']);
$ip = $_SERVER['REMOTE_ADDR'];

$query = @mysql_query('SELECT * FROM usuarios WHERE usuario="'.mysql_real_escape_string($usuario).'"');
if($existe = @mysql_fetch_object($query))
{
	echo 'El usuario '.$usuario.' ya existe.';	
}else{
	$meter = @mysql_query('INSERT INTO usuarios (usuario, dni, clave, email, ip) values ("'.mysql_real_escape_string($usuario).'", "'.mysql_real_escape_string($dni).'", "'.mysql_real_escape_string($clave).'", "'.mysql_real_escape_string($email).'", "'.$ip.'")');
	if($meter)
	{
		echo 'Usuario registrado con exito';
	}else{
		echo 'Hubo un error en el registro.';	
	}
}
?>





<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="login.html">&lt;&lt;&lt;&lt; Regresar</a></p>
