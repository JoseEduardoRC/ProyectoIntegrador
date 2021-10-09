<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1) {

	    $name = trim($_POST['user']);
	    $password = trim($_POST['pass']);

	    $consulta = "INSERT INTO usuarios(nombre, contrasena) VALUES ('$name','$password')";

	    $resultado = mysqli_query($conex,$consulta);

	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
