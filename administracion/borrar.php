<?php
include'../configuracion/config.php';
$query="DELETE FROM formulariopolicial";
mysqli_query($conexion,$query);
mysqli_free_result($query); //liberar la base
mysqli_close($conexion); //cerrar conexion﻿

echo '<script>
     alert("Registros borrados");
    </script>';
header("location:consultas.php" );
?>