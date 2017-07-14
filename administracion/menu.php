<?php
 
 include '../configuracion/config.php';
 require_once("hora.php");

if(!$_SESSION){

	header("location:index.php");
}
$usuario=$_SESSION["usuario"];
?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/hola.css">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
	<div class="side">
<h3 class="titulomuser">Menú</h3>
<ul>

<li><a href="usuario.php">inicio</a>
<li><a href="consultas.php">Denuncias</a>
<li><a href="users.php">usuarios</a>

<li><a href="logout.php">Salir</a>
</div>
<div class="contenido abrir">

<img src="../img/menu.png" class="menu"> <br>
<form>
<imput type="submit"
</form>
</div>
</ul>
<script src="abrir.js"></script>
</body>

</html>
