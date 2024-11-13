<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'wikigames';
$port = 3306; // Puerto personalizado

$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificación de la conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Iniciar la sesión
session_start();

// Valores del formulario
$correo = $_POST['txtcorreo'];
$contrasena = $_POST['txtpassword'];

// Verificar las credenciales en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Obtener el nombre del usuario desde la base de datos
	$row = $result->fetch_assoc();
	$nombreUsuario = $row['nombre'];

	// Guardar el nombre del usuario en la sesión
	$_SESSION['nombreUsuario'] = $nombreUsuario;

	// Redireccionar a index.php
	header('Location: /frontend/index.php');
	exit();
} else {
	echo "<script>alert('Tus credenciales de inicio de sesión no coinciden con ninguna cuenta de nuestro sistema. Ingrese unas credenciales válidas.'); window.location= 'login.html';</script>";
}
?>
