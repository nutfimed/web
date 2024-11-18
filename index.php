<!DOCTYPE html>
<html>
<head>
	<title>Registrar Cita</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Registra tu cita medica!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<label for="cita">Selecciona una opción:</label> 
		<select id="cita" name="cita"> 
			<option value="Nutricionista">Nutricionista</option> 
			<option value="Fisioterapeuta">Fisioterapeuta</option> 
			<option value="Medicina General">Medicina General</option> 
			<option value="Medicina Especializada">Medicina Especializada</option>			
		</select>
		<input type="text" name="CI" placeholder="CI">
    	<input type="submit" name="register">
		
    </form>
	<button onclick="location.href='index.html'">Volver a Inicio</button>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>