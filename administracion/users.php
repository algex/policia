<?php
include 'menu.php';
?>
<html>
<head>
	<title>denuncias</title>
</head>
<div class="contenido abrir">
	<img src="../img/menu.png" class="menu"> <br>
	<div class="bienvenido">Bienvenido <?php echo"$usuario";?> </div>
<div class="salir"><a href="logout.php">salir</a> </div>
<div class="noticias ">Usuarios</div>
<br><center>
  <table>
  	<thread>
  		<tr class="centro" >
  			<td>ID</td>
  			<td>usuario</td>
  			<td>Clave</td>
  			<td>email</td>
  		
  		</tr>
  		<tbody>	
 <?php
    $consulta="SELECT * FROM users";
    $respuesta=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($respuesta)) { ?>
    	 <tr>
            <td><?php echo"$fila[id]"; ?></td>
            <td><?php echo"$fila[usuario]"; ?></td>
            <td><?php echo"$fila[clave]"; ?></td>
            <td><?php echo"$fila[correo]"; ?></td>
          
    	 </tr>

    	 <?php } mysqli_free_result($respuesta); //liberar la base
               mysqli_close($conexion); //cerrar conexion﻿
 ?>


   </tbody>
</table> 

<br>
<br>
<div class="borrar">
<a href="registrarn.php">Registrar nuevo</a>
<a href="borraru.php">Borrar Usuario</a>
</center>
<div>
</div>
<script src="abrir.js"></script>
</body>
</html>