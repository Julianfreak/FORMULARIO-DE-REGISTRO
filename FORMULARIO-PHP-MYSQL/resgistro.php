<?php
	include("conex_db.php");

	if (isset($_POST['enviar'])) {

		if (strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['email']) >=1) {
			$nombres=$_POST['nombres'];
			$apellidos=$_POST['apellidos'];
			$edad=$_POST['edad'];
			$email=$_POST['email'];
			$fecha_reg= date("d/m/y"); 
			$consulta= "INSERT INTO informacion(Nombres, Apellidos, Edad, Email, Fecha_registro) VALUES ('$nombres','$apellidos','$edad','$email','$fecha_reg')"; 
			$resultado= mysqli_query($conexion,$consulta); 
			if ($resultado) {
				?>
					<h3 class="ok"> Registro exitoso !</h3>
				<?php
			} 
			else {
				?>
					<h3 class="bad"> !Ups ha ocurrido un error en el registro!</h3>
				<?php
			} 
		} else {
				?>
					<h3 class="bad"> !Completa todos los campos!</h3>
				<?php
			}
		}
	
?>