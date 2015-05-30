<?php
session_start();
if($_SESSION['logged'] == 'yes')
{
	echo 'Bienvenido '.$_SESSION['usuario'].'.';
	header('Location: gestion_administrador.php');	
}

else{
	echo 'No estas logeado.';	
	header('Location: http://www.google.com.pe');
}
?>