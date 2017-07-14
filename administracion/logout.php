<?php
session_start();
session_destroy();//si es mayor destrumos la session y mandamos al usuario al inicio de sesion
	 header("Location:index.php");//pa juera
?>