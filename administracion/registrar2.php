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
$clave= $_POST['clave'];
$rclave= $_POST['rclave'];
$correo= $_POST['correo'];
include'../configuracion/config.php';

if ($clave==$rclave){

$consulta="SELECT * FROM users WHERE usuario='$usuario' "; 

$respuesta=mysqli_query($conexion,$consulta);
$fila=mysqli_num_rows($respuesta);
mysqli_free_result($respuesta);


if ($fila==0){
$consulta="INSERT INTO users(usuario,clave,correo) VALUES ('$usuario','$clave','$correo')";
$respuesta=mysqli_query($conexion,$consulta);
mysqli_close($conexion);
echo '
 	<script>
     alert("Usuario registrado con exito!");
     window.history.go(-1);
    </script> '; 
}else{
	 echo'<script>
     alert("este nombre de usuario ya existe. prueba con otro!");
     window.history.go(-1);
    </script> ';
}
 } else {
 	echo '<script>
     alert("Las contraseñas no coinciden");
     window.history.go(-1);
    </script> ';
 }



?>