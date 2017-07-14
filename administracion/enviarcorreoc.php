<?php
include '../configuracion/config.php';
$correo= $_POST['correo'];

if (strlen($correo)>=1){
	$consulta="SELECT * FROM users WHERE correo='$correo' ";
	$resultado=mysqli_query($conexion,$consulta);
	$fila= mysqli_num_rows($resultado);
	$info=mysqli_fetch_array($resultado);
	$usuario="$info[usuario]";
	$clave="$info[clave]";
	$asunto="Recuperacion de contraseña";
	if($fila>=1){
		$asunto="Recuperacion de contraseña panel administrativo de Denuncias.";
		$mensaje="<html>
		<head>
			<title>Recupera tu contraseña administrativa</title>
		</head>
		<body>
		<center><h1>Recuperacion automatica de contraseña</h1></center>
		<p>Gracias por usar el servicio de recuperacion de contraseña</p>
		<p>Si no has solicitado este correo te pedimos que cambies ahora mismo tu contraseña</p>
		<h2>correo: $correo<h2>
		<h3>Usuario: $usuario</h3>
		<h3>Clave: $clave</h3>
                <center><h3>Por favor no responda a este correo.</h3></center>

		</body>
		</html>";
		$cabecera="MIME-Version:1.0;\r\n";
		$cabecera.="Content-type: text/html; \r\n charset=iso-8859-1 \r\n";
		$cabecera.="From: Denuncias <denuncias@alpseguridad.com.ve> \r\n";
     mail($correo,$asunto,$mensaje,$cabecera);
      echo '<script>
     alert("Si el email es correcto se enviara un correo para recuperar su contraseña, Recuerde revisar en correo no deseado o Spam");
     window.history.go(-1);
    </script> ';
	}else{
		 echo '<script>
     alert("Si el email es correcto se enviara un correo para recuperar su contraseña,Recuerde revisar en correo no deseado o Spam");
     window.history.go(-1);
    </script> ';
	}
}else{
	 echo '<script>
     alert("Necesita ingresar un correo!");
     window.history.go(-1);
    </script> ';
}


?>