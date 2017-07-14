<?php
require_once("hora.php");
if(!$_SESSION){

	header("location:index.php");
}
$usuario=$_SESSION["usuario"];

?>
<html>
<head>
	<title>borar administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/hola.css">
</head>
<body>
	<h1>ingrese nombre de administrador que desee borrar</h1>
<form action="borraru2.php" method="post" >
<input type="user" name="usuario" placeholder="Usuario">
<input type="submit" value="Enviar" id="boton">
</form>
<div class="borrar">
<a href="users.php">Regresar</a>
</div>
</body>
</html>