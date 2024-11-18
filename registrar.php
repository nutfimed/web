<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['cita']) >= 1 && strlen($_POST['CI']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$cita = trim($_POST['cita']);
		$CI = trim($_POST['CI']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO registro(nombre, email, cita, CI, fecha_reg) VALUES ('$name','$email','$cita','$CI','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Tu cita Medica fue registrado exitosamente!</h3>
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