<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="FORM-CSS.css">
	<title>FORMULARIO PHP</title>
</head>
<body>
	<form method="post">
		<h1>FORMULARIO DE REGISTRO</h1>
		<label>Nombres:</label>
		<input type="text" name="nombres" placeholder="Ingresa tu nombre"><br>
		<label>Apellidos:</label>
		<input type="text" name="apellidos" placeholder="Ingresa tus apellidos"><br>
		<label>Edad:</label>
		<input type="text" name="edad" placeholder="Ingresa tu edad"><br>
		<label>Email:</label>
		<input type="email" name="email" placeholder="Ingresa tu correo"><br>
		<input type="submit" name="enviar">	
	</form>
	<?php
	 include("resgistro.php");
	 ?>

</body>
</html>
