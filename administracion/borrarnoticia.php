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
	<h1>Ingrese el id de la noticia que desee borrar</h1>
<form action="borrarn1.php" method="post" >
<input type="text" name="id1" placeholder="Id de la noticia a borrar" required>
<input type="submit" value="Borrar noticia" id="boton">
</form>
<div class="borrar">
<a href="usuario.php">Regresar</a>
</div>
</body>
</html>