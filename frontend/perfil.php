<?php
// Iniciar la sesión
session_start();

// Verificar si el nombre de usuario está presente en la sesión
if (!isset($_SESSION['nombreUsuario'])) {
    // Si el nombre de usuario no está presente, redirigir a la página de inicio de sesión
    header('Location: /frontend/login.php');
    exit();
}

// Obtener más información del usuario si es necesario (ajusta según la estructura de tu base de datos)
// Aquí, asumiré que tienes una conexión a la base de datos establecida.

// Datos de conexión a la base de datos (ajusta según tus configuraciones)
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'proyecto';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el nombre de usuario de la sesión
$nombreUsuario = $_SESSION['nombreUsuario'];

// Consulta para obtener más información del usuario (ajusta según tu base de datos)
$sql = "SELECT * FROM usuarios WHERE nombre = '$nombreUsuario'";
$result = $conn->query($sql);

// Verificar si se obtuvo el resultado
if ($result->num_rows > 0) {
    // Obtener la fila (row) de la base de datos
    $row = $result->fetch_assoc();

    // Mostrar la información del perfil
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $email = $row['email'];
    $id = $row['id'];


    echo "<div class='contenido-perfil'>";
    echo "<h2>Mi Perfil</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Email: $email</p>";
    echo "<p>UsuariID: $id</p>";
    // Puedes agregar más campos según la estructura de tu base de datos
    echo "<form action='logout.php' method='post'>";
    echo "<input type='submit' value='Cerrar Sesión' name='logout'>";
    echo "</form>";
    echo "</div>";
} else {
    // Si no se encuentra la información del usuario, manejar el error adecuadamente
    echo "Error al obtener la información del usuario.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
