<?php
 
 require_once("hora.php");

if(!$_SESSION){

	header("location:index.php");
}
$usuario=$_SESSION["usuario"];
?>
<html><head>
<meta charset="utf-8">
</head></html>
<?php

$titulo=$_POST['titulo'];
$mensaje=$_POST['noticia'];
$fecha=date("y-n-j h:i:s");
include'../configuracion/config.php';
 
 $consulta="INSERT INTO noticias(titulo,noticia,fecha) VALUES ('$titulo','$mensaje','$fecha')";

 $respuesta=mysqli_query($conexion,$consulta);
 mysqli_close($conexion);
echo '
 	<script>
     alert("Noticia insertada correctamente");
     window.history.go(-1);
    </script> '; 




?>