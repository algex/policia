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
<div class="noticias ">Denuncias</div>
<br>
  <table>
  	<thread>
  		<tr class="centro" >
  			<td>ID</td>
  			<td>Nombre</td>
  			<td>Apellido</td>
  			<td>email</td>
  			<td>Cedula</td>
  			<td>Telefono</td>
  			<td>Tipo de denucia</td>
  			<td>Direccion </td>
  			
  			<td>Sistema Op.</td>
  			<td>IP</td>
  			<td>Navegador</td>
  			<td>Denuncia</td>
  			<td>Leido</td>
  		</tr>
  		<tbody>	
 <?php
    $consulta="SELECT * FROM formulariopolicial";
    $respuesta=mysqli_query($conexion,$consulta);
    while ($fila=mysqli_fetch_array($respuesta)) { ?>
    	 <tr>
            <td><?php echo"$fila[ID]"; ?></td>
            <td><?php echo"$fila[nombre]"; ?></td>
            <td><?php echo"$fila[apellido]"; ?></td>
            <td><?php echo"$fila[email]"; ?></td>
            <td><?php echo"$fila[cedula]"; ?></td>
            <td><?php echo"$fila[telefono]"; ?></td>
            <td><?php echo"$fila[tipo]"; ?></td>
            <td><?php echo"$fila[direccion]"; ?></td>
            <td><?php echo"$fila[so]"; ?></td>
            <td><?php echo"$fila[ip]"; ?></td>
            <td><?php echo"$fila[navegador]"; ?></td>
            <td class="scroll" style="max-height:50px; max-width:200px;" ><?php echo"$fila[mensaje]"; ?></td>
            <td><?php echo"$fila[revisado]"; ?></td>
    	 </tr>

    	 <?php }
    	 mysqli_free_result($respuesta); //liberar la base
         mysqli_close($conexion); //cerrar conexion﻿
 ?>
  


   </tbody>
</table> 
<br>
<br>
<div class="borrar">
<a href="borrar.php">Borrar Registros</a>
<div>
</div>
<script src="abrir.js"></script>
</body>
</html>

