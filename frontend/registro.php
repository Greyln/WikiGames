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
$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$nombreUsuario = $_POST['txtNombredeusuario'];
$correo = $_POST['txtcorreo'];
$contrasena = $_POST['txtpassword'];

// Verificar si el correo ya está registrado
$sql_verificar_correo = "SELECT id_usuario FROM usuarios WHERE correo='$correo'";
$result_verificar_correo = $conn->query($sql_verificar_correo);

if ($result_verificar_correo->num_rows > 0) {
    echo "<script>alert('La dirección de correo electrónico ya está registrada. Por favor, inicie sesión o registrese con un correo distinto.'); window.location= 'registro.html';</script>";
    exit();
}

// Pasar valores del formulario a la base de datos
$sql_insertar_usuario = "INSERT INTO usuarios (nombre, apellido, usuario, correo, password) VALUES ('$nombre', '$apellido', '$nombreUsuario', '$correo', '$contrasena')";

if ($conn->query($sql_insertar_usuario) === TRUE) {
    // Guardar el nombre del usuario en la sesión
    $_SESSION['nombreUsuario'] = $nombre;

    // Redireccionar a WikiGames
    header('Location: http://localhost/final/inicio.php');
    exit();
} else {
    echo "Error: " . $sql_insertar_usuario . "<br>" . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
