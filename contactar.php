<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia esto según tu configuración
$username = "root"; // Cambia esto por tu usuario
$password = ""; // Cambia esto por tu contraseña
$dbname = "jairo"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Capturar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Preparar y vincular
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, correo, mensaje) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Ejecutar
    if ($stmt->execute()) {
        echo "su mensaje ha sido enviado correctamente .";
    } else {
        echo "Error al guardar datos: " . $stmt->error;
    }
    // Cerrar declaración y conexión
    $stmt->close();
}

$conn->close();
?>
