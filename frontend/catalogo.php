<?php
// Iniciar la sesión
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>WikiGames</title>
	<link rel="stylesheet" href="/frontend/style/catalogo.css">
	<link rel="stylesheet" href="/frontend/style/footer.css">
	<link rel="stylesheet" href="/frontend/style/catalogo2.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
	<script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/catalog.js"></script>
	<link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
	<h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
	<nav>
		<p class="logo-Wiki">WikiGames</p>
		<ul class="cont-ul">
			<li>
				<a href="./index.php" class="linkNavegador">Inicio</a>
			</li>
			<li class="develop">
				<a href="./catalogo.php" class="linkNavegador">Catálogo</a>
			</li>
			<li>
				<a href="./nosotros.php" class="linkNavegador">Nosotros</a>
			</li>
			<li>
				<a href="./usuario.php" class="linkNavegador">Mi cuenta</a>
			</li>
		</ul>
	</nav>
	<div class="wrap">
		<h1>Galeria de juegos ⇩</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todos</a>
				<a href="#" class="category_item" category="Shoter Tactico">Shooter Tactico</a>
				<a href="#" class="category_item" category="battle royale">Battle Royale</a>
				<a href="#" class="category_item" category="supervivencia">Suprvivencia</a>
				<a href="#" class="category_item" category="Moba">Moba</a>
				<a href="#" class="category_item" category="Carreras">Carreras</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="Shoter Tactico">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/Games/valorant/portada_jett.png" alt="Valorant portada">
							<h3>Valorant</h3>
						</div>
						<div class="face back">
							<h3>Valorant</h3>
							<p>Valorant es un shooter en primera persona hecho por Riot Games. En este hay personajes
								con
								distintas habilidades las cuales definen el rol del personaje dentro del juego. Entre
								los
								distintos roles existe el iniciador, duelista, humo, controlador y centinela.</p>
							<div class="link">
								<a href="./games/valorant.php">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="Shoter Tactico">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/Games/rainbow_six/portada.png" alt="Rainbow portada">
							<h3>Rainbow</h3>
						</div>
						<div class="face back">
							<h3>Rainbow</h3>
							<p>Rainbow 6 es un shooter de primera persona táctico donde podes elegir entre todos los
								personajes
								el que mas se acomode a tu estilo de juego, son partidas de equipos de cinco atacantes
								contra
								cinco defensores.Los defensores deben defender un objetivo y los atacantes deben
								destruirlo para conseguir la
								victoria</p>
							<div class="link">
								<a href="./games/rainbow_six.php">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="battle royale">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/Games/fortnite/portada.png" alt="fortnite portada">
							<h3>Fortnite</h3>
						</div>
						<div class="face back">
							<h3>Fortnite</h3>
							<p>Fortnite es un battle royale shooter con forma caricaturesca donde podes pelear con mas
								de 100 personas en una isla donde el último que sobreviva es el ganador.
								Fortnite se diferencia del resto de battle royale ya que se puede construir y esto es
								una mecánica innovadora en el género</p>
							<div class="link">
								<a href="./games/fortnite.php">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="Moba">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/Games/lol/portada.png" alt="Lol portada">
							<h3>League of Legends</h3>
						</div>
						<div class="face back">
							<h3>League of Legends</h3>
							<p>Es un videojuego multijugador de arena de batalla en línea o también conocido como moba
								desarrollado y publicado por Riot Games. Con +170 personajes para usar cada uno con un
								kit de
								habilidades totalmente distinto al anterior y con un estilo de juego único. Cada uno con
								funciones, línea y objetivos dentro del juego distintas al resto.</p>
							<div class="link">
								<a href="./games/lol.php">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="Deportes">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="#">
							<h3>Proximamente</h3>
						</div>
						<div class="face back">
							<h3>#</h3>
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ut nobis molestiasci saepe quia?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="ordenadores">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>En construccion</h3>
						</div>
						<div class="face back">
							<h3>en construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="monitores">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>en construccion</h3>
						</div>
						<div class="face back">
							<h3>En construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="audifonos">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>en construccion</h3>
						</div>
						<div class="face back">
							<h3>en construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="audifonos">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>en construccion</h3>
						</div>
						<div class="face back">
							<h3>en construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="audifonos">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>en construccion</h3>
						</div>
						<div class="face back">
							<h3>en construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="audifonos">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>en construccion</h3>
						</div>
						<div class="face back">
							<h3>en construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item" category="audifonos">
					<div class="card">
						<div class="face front">
							<img class="imgTarjeta" src="./img/WIP.jpg" alt="Valorant portada">
							<h3>en construccion</h3>
						</div>
						<div class="face back">
							<h3>en construccion</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius harum molestiae iste,
								nihil
								doloribus fugiat distinctio ducimus maxime totam nulla fuga odio non aperiam eos?</p>
							<div class="link">
								<a href="#">Mas</a>
							</div>
						</div>
					</div>
				</div>
			</section>
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