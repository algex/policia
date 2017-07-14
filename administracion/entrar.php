<html><head>
<meta charset="utf-8">
</head></html>
<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
//conectar a la base de datos : servidor, usuario, clave, base de datos
include'../configuracion/config.php';
$consulta="SELECT * FROM users WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);
$respuesta=mysqli_fetch_array($resultado);

$filas=mysqli_num_rows($resultado); //si coincide se da el resultado y se almacena en la variable filas

if ($filas>0) {  
	$_SESSION['id']=$respuesta["id"];
    $_SESSION['usuario']=$respuesta["usuario"];
    $_SESSION['ultimo']=date("y-n-j h:i:s");
 header("location:usuario.php");
}
else {
 echo '<script>
     alert("Usuario o contraseña incorrectos!");
     window.history.go(-1);
    </script> ';
}
mysqli_free_result($resultado); //liberar la base
mysqli_close($conexion); //cerrar conexion﻿

?>