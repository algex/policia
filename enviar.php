<?php
/*-----Empieza el captcha---------*/
 $recaptcha= $_POST['g-recaptcha-response'];/*-----variable para pedir respuesta a el svr---------*/
 if($recaptcha != ''){ /*-----Condicional por si falla---------*/
 	$secret="6LeLTScTAAAAAF2RHbpZBRqYNCCX9dxoU8t4K5ln"; /*-----Id unica para el captcha---------*/
 	$ip= $_SERVER['REMOTE_ADDR']; /*-----Ip del usuario para enviar a google---------*/
 	$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip"); /*-----Enviamos datos a google mediante GET---------*/
 	$array = json_decode($var, true); /*-----Google nos devuelve un array con json cifrado. Tenemos que desifrarlo y validar que sea true---------*/
 	if($array==true);{  /*-----Termina!!!---------*/ /*-----Si da todo bien corre el codigo si no no.---------*/

include 'phps/sistemaop.php';
include 'phps/navegador.php';

 $destino= "antoniojoselopezp@hotmail.com";
 $destino2="reportes@alpseguridad.com.ve";
 $nombre= $_POST["nombre"];
 $ape= $_POST["ape"];
 $email=$_POST["email"];
 $cedula= $_POST["cedula"];
 $telefono= $_POST["telefono"];
 $tipo=$_POST["tipo"];
 $dir=$_POST["dir"];
 $mensaje= $_POST["mensaje"];
 
 if ($nombre==""){
 	$nombre="Anonimo";
 }
 if ($email==""){
 	$email="Anonimo";
 }
 if ($cedula==""){
 	$cedula="Anonimo";
 }
 if ($telefono==""){
 	$telefono="Anonimo";
 }
 if ($ape==""){
 	$ape="Anonimo";
 }
 
        $cabecera="MIME-Version:1.0;\r\n";
		$cabecera.="Content-type: text/html; \r\n charset=iso-8859-1 \r\n";
		$cabecera.="From: Denuncias <denuncias@alpseguridad.com.ve> \r\n";

 $contenido="<html>
 <head>
 	<title>Nueva denuncia</title>
 </head>
 <body>
 <center><h1>Nueva denuncia</h1></center>
 <p><b>Nueva denuncia de: <u>$nombre</u></b></p>
 <p><b>Apellido: <u>$ape</u></b></p>
 <p><b>Email de quien envía: <u>$email</u></b></p>
 <p><b>Numero de Cedula: <u>$cedula</u></b></p>
 <p><b>Telefono: <u>$telefono</u></b></p>
 <p><b>Tipo de Denuncia: <u>$tipo</u></b></p>
 <p><b>Direccion Del hecho: <u>$dir</u></b></p>
 <p><b>Navegador Usado: <u>$ua</u></b></p>
 <p><b>sistema Operativo: <u>$so</u></b></p>
 <p><b>Ip de quien envia: <u>$ip</u></b></p>
 <p><b>Denuncia: $mensaje</b></p>
 </body>
 </html>";
 mail($destino,"Nueva Denuncia de: ".$nombre, $contenido,$cabecera);


 
 mail($destino2,"Nueva Denuncia de: ".$nombre, $contenido,$cabecera);

include 'configuracion/config.php';

 $query= "INSERT INTO formulariopolicial(nombre,apellido,email,cedula,telefono,tipo,direccion,mensaje,so,ip,navegador) VALUES ('$nombre','$ape','$email','$cedula','$telefono','$tipo','$dir','$mensaje','$so','$ip','$ua')";
 $query2="INSERT INTO totales(nombre,apellido,email,cedula,telefono,tipo,direccion,mesaje,so,ip,navegador) VALUES ('$nombre','$ape','$email','$cedula','$telefono','$tipo','$dir','$mensaje','$so','$ip','$ua')";
 $resultado=mysqli_query($conexion,$query);
 $resultado2=mysqli_query($conexion,$query2);
 mysqli_close($conexion);

 header("Location:enviado.php");


	}
 }else{
 	echo '
 	<script>
     alert("Problemas con el captcha");
     window.history.go(-1);
    </script> ';
 }
 ?>
