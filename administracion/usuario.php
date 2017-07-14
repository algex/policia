
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
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

	<title>Panel de denuncias</title>
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
<div class="bienvenido">Bienvenido <?php echo"$usuario";?> </div>
<div class="salir"><a href="logout.php">salir</a> </div>
<div class="noticias">Noticias</div>
<br>
<br>
 <?php 
 $consulta="SELECT * FROM noticias";
    $respuesta=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($respuesta)) { ?>
  <div class="titulonoticia"><?php echo"$fila[titulo]"; ?></div>
  <div class="contenoticia"> <?php echo"$fila[noticia]"; ?></div>
  <div class="fechanoc"> Fecha de publicación: <?php echo"$fila[fecha]"; ?></div>
   <div class="idnoc"> ID: <?php echo"$fila[id]"; ?> </div>
 <?php }?>
   <br>
   <br>
<br>
<br>
<center>
<div class="borrar">
<a href="nueva.php">Nueva Noticia</a>  <a href="borrarnoticia.php">Borrar Noticia</a>

</center>
</ul>
</div>
<script src="abrir.js"></script>
</body>

</html>
