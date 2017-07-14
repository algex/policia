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
$id= $_POST['id1'];
include'../configuracion/config.php';

$consulta="SELECT * FROM noticias WHERE id='$id' "; 
$respuesta=mysqli_query($conexion,$consulta);
$fila=mysqli_num_rows($respuesta);
mysqli_free_result($respuesta);
if($fila>0){
    $consulta="DELETE FROM noticias WHERE id='$id' "; 
    $respuesta=mysqli_query($conexion,$consulta);
    echo'<script>
     alert("Borrado con exito!");
     window.history.go(-1);
    </script> ';
}else{
     echo'<script>
     alert("Ese id de noticia no existe, intenta de nuevo");
     window.history.go(-1);
    </script> ';
}
mysqli_close($conexion);


?>