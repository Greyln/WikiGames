<?php
// Iniciar la sesión
session_start();

// Verificar si el nombre de usuario está presente en la sesión
if (!isset($_SESSION['nombreUsuario'])) {
	// Si el nombre de usuario no está presente, redirigir a la página de inicio de sesión
	header('Location: /frontend/login.html');
	exit();
}

// Datos de conexión a la base de datos (ajusta según tus configuraciones)
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'wikigames';
$port = 3306; // Puerto personalizado

$conn = new mysqli($servername, $username, $password, $database, $port);

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
	<title>WikiGames</title>
	<link rel="stylesheet" href="/frontend/style/Usuario.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="./img/favicon.ico">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap');
	</style>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
</head>
<body>

	<h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
	<nav>
		<p class="logo-Wiki">WikiGames</p>
		<ul class="cont-ul">
			<li><a href="./index.php" class="linkNavegador">Inicio</a></li>
			<li class="develop"><a href="./catalogo.php" class="linkNavegador">Catálogo</a></li>
			<li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
			<li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
		</ul>
	</nav>

	<div class="Perfilcontenedor">
		<div class="Perfil">
			<div class="div1">
				<div class="header">
					<img src="./img/usuario.png" alt="Foto de usuario" class="user-photo">
					<?php
					if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();
						$nombre = htmlspecialchars($row['nombre']);
						$apellido = htmlspecialchars($row['apellido']);
						$correo = htmlspecialchars($row['correo']);
						$nombreUsuario = htmlspecialchars($row['usuario']);

						echo "<span class='user-name'>$nombre $apellido</span>";
						echo "<p>Usuario: $nombreUsuario</p>";
						echo "<p>Correo|: $correo</p>";
					} else {
						echo "Error al obtener la información del usuario.";
					}
					?>
				</div>
			</div>
			<div class="div2">
				<form action='logout.php' method='post'>
					<input type='submit' value='Cerrar Sesión' name='logout'>
				</form>
			</div>
		</div>
	</div>

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
				<p>Presentamos nuestra innovadora página de videojuegos...</p>
			</div>
			<div class="box">
				<h2>SÍGUENOS</h2>
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