<?php
require_once("hora.php");
if(!$_SESSION){

	header("location:index.php");
}
$usuario=$_SESSION["usuario"];

?>
<html>
<head>
	<title>Registrar nuevo administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/hola.css">
</head>
<body>
	<h1>Ingrese los datos del nuevo administrador </h1>
<form action="registrar2.php" method="post" >
<input type="user" name="usuario" placeholder="Usuario">
<input type="password" name="clave" placeholder="Contraseña">
<input type="password" name="rclave" placeholder="Repetir contraseña">
<input type="email" name="correo" placeholder="email">
<input type="submit" value="Registrar" id="boton">
</form>
<div class="borrar">
<a href="users.php">Regresar</a>
</div>
</body>
</html>