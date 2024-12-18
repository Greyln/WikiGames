<?php
// Iniciar la sesión
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/frontend/style/pag4.css">
	<link rel="stylesheet" href="/frontend/style/footer.css">
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	<title>WikiGames</title>
	<base href="/frontend/index.html">
	<link rel="shortcut icon" href="./img/favicon.ico">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
</head>

<body>
	<h1 class="titulo">WikiGames</h1>
		<p class="logo-Wiki">WikiGames</p>
		<ul class="cont-ul">
			<input type="checkbox" id="estrelaCheckbox">
			<label for="estrelaCheckbox"></label>
			<li><a href="./index.php" class="linkNavegador">Inicio</a></li>
			<li class="develop"><a href="./catalogo.php" class="linkNavegador">Catálogo</a>
			</li>
			<li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
			<li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
		</ul>
	</nav>
	<div class="main">
		<main class=pagg>
			<div class="portada">
				<h1>Rainbow six</h1>
			</div>
			<img src="./img/Games/rainbow_six/banner.png" alt="Banner">

			<div class="contenedorGrilla2">
				<div class="div10">
					<p class="parrafo10">Introducion:</p>
					<p class="parrafo10">Rainbow six es un shooter de primera persona táctico donde podes elegir entre todos los personajes
						el que mas se acomode a tu estilo de juego, son partidas de equipos de cinco atacantes contra cinco defensores.
						Los defensores deben defender un objetivo y los atacantes deben destruirlo para conseguir la victoria
					</p>
				</div>
			</div>

			<div class="portal1">
				<div class="titulo2">
					<h2>Contenido</h2>
				</div>

				<div class="image-grid">
					<div class="image-item">
						<a href="https://www.youtube.com/watch?v=4YHfaX2BIYM&list=PLFm6NSJeDkOcnxhInSuE7bAatIEE_1fwX&pp=gAQBiAQBhttps://www.youtube.com/watch?v=4YHfaX2BIYM&list=PLFm6NSJeDkOcnxhInSuE7bAatIEE_1fwX&pp=gAQBiAQB">
							<img src="./img/Games/rainbow_six/agentes.jpg" alt="Imagen 1">
							<p class="image-caption">Agentes</p>
						</a>
					</div>
					<div class="image-item">
						<a href="https://www.youtube.com/watch?v=4HbqydbqCQI&list=PLFm6NSJeDkOeeJ1pNjHNBgSBnAZLZUSkg&pp=gAQBiAQB">
							<img src="./img/Games/rainbow_six/mejora_aim.jpg" alt="Imagen 2">
							<p class="image-caption">Mejora tu ain</p>
						</a>
					</div>
					<div class="image-item">
						<a href="https://www.youtube.com/watch?v=i8SPbbk-AtI&list=PLFm6NSJeDkOfgTWNcHBx9ZOksYtTkGofZ&pp=gAQBiAQB">
							<img src="./img/Games/rainbow_six/game_modes.png" alt="Imagen 3">
							<p class="image-caption">Modos de juegos</p>
						</a>
					</div>
					<div class="image-item">
						<a href="https://www.youtube.com/watch?v=Dko4xgD7RGY&list=PLFm6NSJeDkOdzRMRF-USX7TEcqUImi98l&pp=gAQBiAQB">
							<img src="./img/Games/rainbow_six/aprende_mapas.jpg" alt="Imagen 5">
							<p class="image-caption">Mapas</p>
						</a>
					</div>
					<div class="image-item">
						<a href="https://www.youtube.com/watch?v=oxoBppBUJmU&list=PLFm6NSJeDkOcNaNKmE4KbeYGgBrB1_6WH">
							<img src="./img/Games/rainbow_six/consejos.jpg" alt="Imagen 6">
							<p class="image-caption">Consejos</p>
						</a>
					</div>
					<div class="image-item">
						<a href="https://www.youtube.com/watch?v=uR4ew3-vqTY"  target="_blank">
							<img src="./img/lore_alt.png" alt="Imagen 7">
							<p class="image-caption">Mucho lore</p>
						</a>
					</div>
				</div>
			</div>

			<div class="portal3">
				<div class="titulo2">
					<h2>Cambios recientes</h2>
				</div>
				<div class="image-grid3">
					<div class="image-item2">
						<a href="https://www.youtube.com/watch?v=wpKSullQGhQ" target="_blank">
							<img src="./img/Games/rainbow_six/master_chief.jpg" alt="Imagen 1">
							<p class="image-caption">El Jefe Maestro ya ha llegado a Rainbow six</p>
						</a>
					</div>
				</div>
			</div>
		</main>

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
				<p>Presentamos nuestra innovadora página de videojuegos, fruto de un trabajo colaborativo y dedicado.
					Ofrecemos una experiencia única en el mundo de los videojuegos, con una plataforma atractiva y fácil
					de usar. Disponemos de una amplia selección de juegos de diversos géneros y plataformas.</p>
				<p></p>
			</div>
			<div class="box">
				<h2>SIGUENOS</h2>
				<div class="red-social">
					<a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
					<a href="https://www.instagram.com/wikii_games/" target="_blank" class="fa fa-instagram"></a>
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