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
$usuario= $_POST['usuario'];
include'../configuracion/config.php';

$consulta="SELECT * FROM users WHERE usuario='$usuario' "; 
$respuesta=mysqli_query($conexion,$consulta);
$fila=mysqli_num_rows($respuesta);
mysqli_free_result($respuesta);
if($fila>0){
    $consulta="DELETE FROM users WHERE usuario='$usuario' "; 
    $respuesta=mysqli_query($conexion,$consulta);
    echo'<script>
     alert("Borrado con exito!");
     window.history.go(-1);
    </script> ';
}else{
     echo'<script>
     alert("este usuario no existe");
     window.history.go(-1);
    </script> ';
}
mysqli_close($conexion);


?>