<?php
// Iniciar la sesión
session_start();

// Verificar si el nombre de usuario está presente en la sesión
if (!isset($_SESSION['nombreUsuario'])) {
    // Si el nombre de usuario no está presente, redirigir a la página de inicio de sesión
    header('Location: /frontend/login.php');
    exit();
}

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

// Consulta para obtener más información del usuario (usando consultas preparadas)
$sql = "SELECT * FROM usuarios WHERE nombre = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nombreUsuario);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/frontend/style/footer.css">
  <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
  </style>
  <link rel="shortcut icon" href="./img/favicon.ico">
  <link rel="stylesheet" href="/frontend/style/style.css">
  <title>WikiGames</title>
</head>

<body>
  <h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
  <nav>
        <p class="logo-Wiki">WikiGames</p>
        <ul class="cont-ul">
            <li><a href="./index.php" class="linkNavegador">Inicio</a></li>
            <li><a href="./noticias.php" class="linkNavegador">Noticias</a></li>
            <li class="develop"><a href="./catalogo.php" class="linkNavegador">Catalogo</a>
            </li>
            <li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
            <li><a href="./perfil2.php" class="linkNavegador">Perfil</a></li>
        </ul>
    </nav>

  <!-- Sección para mostrar la información del perfil -->
  <section class="form-register">
    <?php
    // Verificar si se obtuvo el resultado del perfil
    if ($result->num_rows > 0) {
        // Obtener la fila (row) de la base de datos
        $row = $result->fetch_assoc();

        // Mostrar la información del perfil
        $nombre = htmlspecialchars($row['nombre']);
        $apellido = htmlspecialchars($row['apellido']);
        $email = htmlspecialchars($row['email']);
        $id = htmlspecialchars($row['id']);

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
    ?>
  </section>

  <!-- Footer -->
  <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="./img/favicon.ico" alt="Logo de la pagina">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Presentamos nuestra innovadora página de videojuegos, fruto de un trabajo colaborativo y dedicado.
                    Ofrecemos una experiencia única en el mundo de los videojuegos, con una plataforma atractiva y fácil
                    de usar. Disponemos de una amplia selección de juegos de diversos géneros y plataformas.</p>
                <p></p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/?lang=es" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/@Wikigames-kb5ig" target="_blank" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>WikiGames</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</body>

</html>
