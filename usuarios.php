<?php
require('conexion.php');
$sql=$conexion->query("SELECT us.id_usuarios, us.usuario, us.dni, us.clave, us.email
	   FROM usuarios us");
?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	background-image: url(imagenes/fondousuarios.png);
	margin-right: 2cm;
}
.Estilo60 {font-size: 24px}
.Estilo61 {color: #0000FF; font-weight: bold; }
-->
</style></head>

<body>
<p align="center" class="Estilo60">Gestion de Usuarios </p>
<p align="left" class="Estilo60"><a href="registro.html">Nuevo Usuario  </a></p>
<table width="72%" border="1" align="center">
  <thead>
    <tr>
      <td width="7%"><div align="center" class="Estilo61">Id</div></td>
      <td width="21%"><div align="center" class="Estilo61">Usuario</div></td>
      <td width="10%"><div align="center" class="Estilo61">Dni</div></td>
      <td width="11%"><div align="center" class="Estilo61">Clave</div></td>
      <td width="9%"><div align="center" class="Estilo61">Email</div></td>
	  <td width="22%"><div align="center" class="Estilo61">Modificar/Eliminar</div></td>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $sql->fetch_assoc()){?>
    <tr>
      <td><div align="center"><?php echo $row['id_usuarios'];?></div></td>
      <td><div align="center"><?php echo $row['usuario'];?></div></td>
      <td><div align="center"><?php echo $row['dni'];?></div></td>
      <td><div align="center"><?php echo $row['clave'];?></div></td>
      <td><div align="center"><?php echo $row['email'];?></div></td>
	    
      <td><div align="center"><a href="modificar_usuario.php?id_usuarios=<?php echo $row['id_usuarios'];?>">Modificar</a> /<a href="eliminar_usuario.php?id_usuarios=<?php echo $row['id_usuarios'];?>">Eliminar</a></div></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<p>&nbsp;</p>
<p><a href="index.php">&lt;&lt;&lt; Regresar &lt;&lt;&lt; </a></p>
<?php
$conexion->close();
?>
</body>
</html>
