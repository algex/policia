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
	<h1>Publicar Nueva Noticia </h1>
<form action="nueva2.php" method="post" >
<input type="text" name="titulo" placeholder="Titulo" require>
<textarea name="noticia" placeholder="Escriba aquí su Noticia" required></textarea>
<input type="submit" value="Pubicar" id="boton">
</form>
<div class="borrar">
<a href="usuario.php">Regresar</a>
</div>
</body>
</html>