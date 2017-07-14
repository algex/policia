<?php
session_start();//iniciamos las session
$usuario=$_SESSION["usuario"];
$antigua_fecha=$_SESSION["ultimo"];//pedimos el arreglo antigua fecha
$actual=date("y-n-j h:i:s");//hora actual del server
$tiempo=(strtotime($actual)-strtotime($antigua_fecha));//restamos hora actyual menos la antigua para ver cuanto tiempo ha pasado
$operacion=60*60;//tiempo que queremos que saque el sistema (el 1 para los minutos)
if ($tiempo>=$operacion){
//condicionamos para sacar
	 session_destroy();//si es mayor destrumos la session y mandamos al usuario al inicio de sesion
	 header("Location:reconectar.php");//pa juera

} else{
$_SESSION["ultimo"]=$actual;//si no pasa lo anterior solo actualizamos el tiempo
}

?>