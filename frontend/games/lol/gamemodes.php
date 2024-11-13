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
	<link rel="stylesheet" href="/frontend/style/pag2-10.css">
	<link rel="stylesheet" href="/frontend/style/footer.css">
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	<title>WikiGames</title>
	<base href="/frontend/index.html">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
	<link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
	<h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
 body
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
				<h1>Modos de juegos</h1>
			</div>

			<div class="portal1">
				<div class="titulo2">
					<h2>La Grieta del invocador</h2>
				</div>

				<div class="image-grid">

					<div class="div10">
						<p class="image-caption">
							Este es el modo principal y más común de LoL. Se juega en el mapa llamado "La Grieta del Invocador".
							En este modo, dos equipos de cinco jugadores compiten para destruir el Nexo enemigo, situado en la base enemiga.
						</p>

						<p class="image-caption">
							Cada jugador selecciona un campeón con habilidades únicas y trabaja junto con su equipo para controlar territorios, eliminar objetivos y derrotar a los campeones enemigos.
							La estrategia, la cooperación y la toma de decisiones son fundamentales para ganar partidas en este modo.
						</p>

						<p class="image-caption">
							El Modo Clasificatorio en la Grieta del Invocador de League of Legends permite a los jugadores competir en partidas clasificatorias en solitario o dúo.
							Comienza en una división y liga específicas, con el objetivo de ascender mediante la acumulación de Puntos de Liga (LP).
							Los jugadores participan en promociones para avanzar y pueden descender si pierden demasiados LP.
						</p>

					</div>


					<div class="image-item">
						<img src="./img/Games/lol/summoners_rift.png" alt="Imagen 1">
					</div>

				</div>
			</div>

			<div class="portal2">

				<div class="titulo2">
					<h2>Aram</h2>
				</div>

				<div class="image-grid2">
					<div class="div10">
						<p class="image-caption2">
							ARAM es un modo de juego en League of Legends donde los jugadores reciben campeones aleatorios y se enfrentan en un solo carril en la línea central.
							El objetivo es destruir el Nexo enemigo. No hay vuelta a la base para curarse, y las partidas son rápidas y llenas de acción.
						</p>

						<p class="image-caption2">
							La selección de campeones es aleatoria, lo que hace que la estrategia de composición de equipo sea menos relevante.
							Es una experiencia más relajada y caótica en comparación con map_summoners_rift.
						</p>
					</div>
					<div class="image-item2">
						<img src="./img/Games/lol/map_aram_2.jpg" alt="Mapa Aram">
					</div>
				</div>
			</div>

			<div class="portal3">

				<div class="titulo2">
					<h2>Teamfight Tactics</h2>
				</div>

				<div class="image-grid3">

					<div class="div10">
						<p class="image-caption2">
							Teamfight Tactics (TFT) es un juego autónomo basado en el género de Auto Battler dentro del universo de League of Legends.
							Los jugadores seleccionan y mejoran campeones, construyen equipos estratégicos y los colocan en un tablero para enfrentarse automáticamente a otros jugadores.

						</p>

						<p class="image-caption2">
							El objetivo es ser el último jugador en pie, gestionando la economía y adaptándose a los cambios en el conjunto de campeones para tener éxito.
						</p>

						<p class="image-caption2">
							Ademas cuenta con un modo clasificatorio.
						</p>
					</div>

					<div class="image-item3">
						<img src="./img/Games/lol/tft.jpg" alt="Imagen 1">
					</div>
				</div>

			</div>

			<div class="portal4">

				<div class="titulo2">
					<h2>Frenesí en el nexo</h2>
				</div>

				<div class="image-grid4">

					<div class="div10">
						<p class="image-caption2">
							"Frenesí del Nexo" o "Nexus Blitz" es un modo de juego temporal en League of Legends lleno de emoción y sorpresas.
						</p>
						<p class="image-caption2">
							Las partidas incluyen desafíos inesperados como derrotar a un Teemo gigante, enfrentamientos solitarios y momentos de acción rápida, como sesiones de URF en equipo.
						</p>

						<p class="image-caption2">
							La imprevisibilidad y la diversidad de eventos hacen que cada partida sea emocionante y única.
						</p>
					</div>

					<div class="image-item4">
						<img src="./img/Games/lol/map_nexus_blitz.jpg" alt="Imagen 1">
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