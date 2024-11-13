<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>WikiGames</title>
	<link rel="shortcut icon" href="./img/favicon.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/common.css">
    <link rel="stylesheet" href="/frontend/css/nav.css">
    <link rel="stylesheet" href="/frontend/style/footer.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap');
	</style>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
<h1 class="title">WikiGames <img class="logo" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>

<nav>
	<p>WikiGames</p>
	<ul class="navlist">
		<li>
			<a href="./index.php" class="link">Inicio</a>
		</li>
		<li class="develop">
			<a href="./catalogo.php" class="link">Catálogo</a>
		</li>
		<li>
			<a href="./nosotros.php" class="link">Nosotros</a>
		</li>
		<li>
			<a href="./usuario.php" class="link">Mi cuenta</a>
		</li>
	</ul>
</nav>

<main>
	<center>
		<h1 class="SubtituloJuegos">Últimas Noticias</h1>
	</center>
	<section class="parent1">
		<article class="Noticias1">
			<p>HEAVY IS THE CROWN ft. Linkin Park (Video musical oficial)</p>
			<a href="https://www.youtube.com/watch?v=5FrhtahQiRc">
				<video width="100%" loop autoplay muted>
					<source src="./videos/Lol Linkin Park.mp4" type="video/mp4">
					Tu navegador no soporta el elemento de video.
				</video>
			</a>
		</article>

		<article class="Noticias2">
			<a href="https://www.twitch.tv/n0guito" target="_blank">
				<img src="./img/twich_follow.png" alt="Anuncio" width="80%">
			</a>
			<p>Sigueme en Twitch! @N0guito</p>
		</article>

		<article class="Noticias3">
			<img src="./img/Noticias/operation-new-blood.png" alt="Noticia 3" width="100%">
			<a href="https://youtu.be/iNugljaf0Sw?si=582y31aScBf5d7PV" target="_blank">
				<p>Rainbow Six Siege: Operation New Blood tráiler cinemático</p>
			</a>
		</article>

		<article class="Noticias4">
			<img src="./img/Noticias/tvyse.jpeg" alt="Noticia 4" width="100%">
			<a href="https://www.youtube.com/watch?v=CvoFNLl2li8&t=78s" target="_blank">
				<p>Tráiler de agente: Vyse - VALORANT</p>
			</a>
		</article>

		<article class="Noticias5">
			<img src="./img/Noticias/arcane.png" alt="Noticia 5" width="100%">
			<a href="https://youtu.be/_Ke8AVNsZCY?si=xb0dvj9rWU2RzrCW" target="_blank">
				<p>Estreno comunitario mundial de la segunda temporada de Arcane</p>
			</a>
		</article>
	</section>

	<center>
		<h1 class="SubtituloJuegos">⇩ Juegos destacados ⇩</h1>
	</center>
	<section class="parent">
		<div class="container">
			<article class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/fortnite/portada.png" alt="portadaFortnite">
					<h3>Fortnite</h3>
				</div>
				<div class="face back">
					<h3>Fortnite</h3>
					<p>Fortnite es un battle royale shooter con forma caricaturesca donde podes pelear con mas de 100
						personas en una isla donde el último que sobreviva es el ganador.</p>
					<p>Fortnite se diferencia del resto de battle royales, debido a la capacidad de construir
						siendo una mecánica innovadora en el género.</p>
					<div class="link">
						<a href="./games/fortnite.php">Mas</a>
					</div>
				</div>
			</article>

			<article class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/lol/portada.png" alt="imagen de league of Legends">
					<h3>League of Legends</h3>
				</div>
				<div class="face back">
					<h3>lol</h3>
					<p>Es un videojuego multijugador de arena de batalla en línea o también conocido como moba
						desarrollado y publicado por Riot Games.</p>
					<p> Con +170 personajes para usar cada uno con un kit de habilidades
						totalmente distinto al anterior y con un estilo de juego único.</p>
					<p>Cada uno con funciones, línea y objetivos dentro del juego distintas al resto.</p>
					<div class="link">
						<a href="./games/lol.php">Mas</a>
					</div>
				</div>
			</article>

			<article class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/rainbow_six/portada.png" alt="imagen de Rainbow">
					<h3>Rainbow Six</h3>
				</div>
				<div class="face back">
					<h3>Rainbow</h3>
					<p>Rainbow 6 es un shooter de primera persona táctico donde podes elegir entre todos los personajes
						el que mas se acomode a tu estilo de juego.
					<p>Son partidas de equipos de cinco atacantes contra cinco defensores.</p>
					<p>Los defensores deben defender un objetivo y los atacantes deben
						destruirlo para conseguir la victoria.</p>
					<div class="link">
						<a href="./games/rainbow_six.php">Mas</a>
					</div>
				</div>
			</article>

			<article class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/valorant/portada.png" alt="imagen de valorant">
					<h3>Valorant</h3>
				</div>
				<div class="face back">
					<h3>Valorant</h3>
					<p>Valorant es un shooter en primera persona hecho por Riot Games.</p>
					<p>En este hay personajes con distintas habilidades las cuales
						definen el rol del personaje dentro del juego.</p>
					<p>Entre los distintos roles existe el iniciador, duelista, humo, controlador y centinela.</p>
					<div class="link">
						<a href="./games/valorant.php">Mas</a>
					</div>
				</div>
			</article>
		</div>
	</section>
</main>

<footer class="pie-pagina">
	<section class="grupo-1">
		<div class="box">
			<figure>
				<a href="#">
					<img src="./img/favicon.ico" alt="Logo de la pagina">
				</a>
			</figure>
		</div>
		<div class="box">
			<h2>SOBRE NOSOTROS</h2>
			<p>Presentamos nuestra innovadora página de videojuegos, fruto de un trabajo colaborativo y dedicado.</p>
			<p>Ofrecemos una experiencia única en el mundo de los videojuegos, con una plataforma atractiva y fácil de usar.</p>
			<p>Disponemos de una amplia selección de juegos de diversos géneros y plataformas.</p>
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
	</section>
	<section class="grupo-2">
		<small>&copy; 2024 <b>WikiGames</b> - Todos los Derechos Reservados.</small>
	</section>
</footer>
</body>
</html>
