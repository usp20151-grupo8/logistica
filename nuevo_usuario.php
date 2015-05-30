<html>
	<head>
		<title>Nuevo Usuario</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	margin-right: 2cm;
}
-->
    </style></head>
	<body>
		
		<center><h1>Nuevo Usuario</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="insertar_usuario.php">
			<table width="50%" border="1" align="center">
				<tr>
                  <td><b>Nombres</b></td>
				  <td><input type="text" name="nombres" size="25" /></td>
			  </tr>
				<tr>
					<td width="246"><b>Dni</b></td>
					<td width="397"><input type="text" name="dni" size="25" /></td>
				</tr>
				<tr>
				  <td width="246"><b>Direccion</b></td>
					<td width="397"><input type="text" name="direccion" size="25" /></td>
			  </tr>
				<tr>
				  <td width="246"><b>Email</b></td>
					<td width="397"><input type="text" name="email" size="25" /></td>
			  </tr>
				<tr>
                  <td><div align="left"><strong>Cargo</strong></div></td>
				  <td><div align="right">
                      <select name="cargo">
                        <option value="almacenero">almacenero</option>
                        <option value="administrador">administrador</option>
                       </select>
                  </div></td>
			  </tr>
				<tr>
                  <td><div align="left"><strong>Estado:</strong></div></td>
				  <td><div align="right">
                      <select name="estado">
                        <option value="0">inactivo</option>
                        <option value="1">activo</option>
                      </select>
                  </div></td>
			  </tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
		  </table>
		</form>
	</body>
</html>						