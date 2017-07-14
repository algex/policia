<html>
<head>
	<title>Formulario de Denuncia</title>
	<link rel="stylesheet" type="text/css" href="css/hola.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta charset="utf-8">
</head>
<body>
<form action="enviar.php" method="post">
<h2>Denuncie Aquí</h2>
<input type="text" name="nombre" placeholder="Nombre (Opcional)">
<input type="text" name="ape" placeholder="Apellido (Opcional)">
<input type="email" name="email" placeholder="Email (Opcional)">
<input type="text" name="cedula" placeholder="Cédula (Opcional)">
<input type="text" name="telefono" placeholder="Telefono (Opcional)" >
<input type="text" name="tipo" placeholder="Tipo de Denuncia (Requerido)" required>
<input type="text" name="dir" placeholder="Dirección del hecho (Requerido)" required>
<textarea name="mensaje" placeholder="Escriba aquí su denuncia (Requerido)" required></textarea>
<div class="g-recaptcha" data-sitekey="6LeLTScTAAAAAJyzkjcuW0_p1qaXarhjoHep1djQ" align="center"></div>
<input type="submit" value="ENVIAR" id="boton">
</form>
</body>
</html>