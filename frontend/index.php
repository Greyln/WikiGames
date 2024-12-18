<head?php
// Iniciar la sesión
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WikiGames</title>
	<link rel="stylesheet" href="/frontend/style/footer.css">
	<link rel="stylesheet" href="/frontend/style/nav.css">
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
			<li class="develop"><a href="./catalogo.php" class="linkNavegador">Catálogo</a>
			</li>
			<li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
			<li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
		</ul>
	</nav>
	<center>
		<h1 class="SubtituloJuegos">Últimas Noticias</h1>
	</center>
	<div class="parent1">
		<div class="Noticias1">
			<a href="https://www.youtube.com/watch?v=5FrhtahQiRc">
				<video width="100%" loop autoplay muted>
					<source src="./videos/Lol Linkin Park.mp4" type="video/mp4">
					Tu navegador no soporta el elemento de video.
				</video>
			</a>
		</div>
		<div class="Noticias2">
			<a href="https://www.twitch.tv/n0guito" target="_blank">
				<img src="./img/twich_follow.png" alt="Anuncio" width="100%">
			</a>
		</div>

		<div class="Noticias3">
			<img src="./img/Noticias/operation-new-blood.png" alt="Noticia 3" width="100%">
			<a href="https://youtu.be/iNugljaf0Sw?si=582y31aScBf5d7PV" target="_blank">
				<p>Rainbow Six Siege: Operation New Blood tráiler cinemático</p>
			</a>
		</div>

		<div class="Noticias4">
			<img src="./img/Noticias/tvyse.jpeg" alt="Noticia 4" width="100%">
			<a href="https://www.youtube.com/watch?v=CvoFNLl2li8&t=78s" target="_blank">
				<p>Tráiler de agente: Vyse - VALORANT</p>
			</a>
		</div>

		<div class="Noticias5">
			<img src="./img/Noticias/arcane.png" alt="Noticia 5" width="100%">
			<a href="https://youtu.be/_Ke8AVNsZCY?si=xb0dvj9rWU2RzrCW" target="_blank">
				<p>Estreno comunitario mundial de la segunda temporada de Arcane</p>
			</a>
		</div>
	</div>


	<center>
		<h1 class="SubtituloJuegos">⇩ Juegos destacados ⇩</h1>
	</center>
	<div class="parent">
		<div class="div1">
			<div class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/fortnite/portada.png" alt="portadaFortnite">
					<h3>Fortnite</h3>
				</div>
				<div class="face back">
					<h3>Fortnite</h3>
					<p>Fortnite es un battle royale shooter con forma caricaturesca donde podes pelear con mas de 100
						personas en una isla donde el último que sobreviva es el ganador.
						Fortnite se diferencia del resto de battle royale ya que se puede construir y esto es una
						mecánica innovadora en el género</p>
					<div class="link">
						<a href="./games/fortnite.html">Mas</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/lol/portada.png" alt="imagen de league of Legends">
					<h3>League of Legends</h3>
				</div>
				<div class="face back">
					<h3>lol</h3>
					<p>Es un videojuego multijugador de arena de batalla en línea o también conocido como moba
						desarrollado y publicado por Riot Games. Con +170 personajes para usar cada uno con un kit de
						habilidades totalmente distinto al anterior y con un estilo de juego único. Cada uno con
						funciones, línea y objetivos dentro del juego distintas al resto.</p>
					<div class="link">
						<a href="./games/lol.html">Mas</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/rainbow_six/portada.png" alt="imagen de Rainbow">
					<h3>Rainbow Six</h3>
				</div>
				<div class="face back">
					<h3>Rainbow</h3>
					<p>Rainbow 6 es un shooter de primera persona táctico donde podes elegir entre todos los personajes
						el que mas se acomode a tu estilo de juego, son partidas de equipos de cinco atacantes contra
						cinco defensores.Los defensores deben defender un objetivo y los atacantes deben destruirlo para
						conseguir la
						victoria</p>
					<div class="link">
						<a href="./games/rainbow_six.html">Mas</a>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="face front">
					<img class="imgTarjeta" src="./img/Games/valorant/portada.png" alt="imagen de valorant">
					<h3>Valorant</h3>
				</div>
				<div class="face back">
					<h3>Valorant</h3>
					<p>Valorant es un shooter en primera persona hecho por Riot Games. En este hay personajes con
						distintas habilidades las cuales definen el rol del personaje dentro del juego. Entre los
						distintos roles existe el iniciador, duelista, humo, controlador y centinela.</p>
					<div class="link">
						<a href="./games/valorant.html">Mas</a>
					</div>
				</div>
			</div>



		</div>

		<div class="div2"> </div>

		<div class="div3"> </div>
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